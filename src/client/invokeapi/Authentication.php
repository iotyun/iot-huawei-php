<?php
/**
 * Created by PhpStorm.
 * User: hWX538513
 * Date: 2018/10/12
 * Time: 17:22
 */

namespace iotyun\huaweiiot\client\invokeapi;



use iotyun\huaweiiot\client\DefaultNorthApiClient;
use iotyun\huaweiiot\client\NorthApiClient;
use iotyun\huaweiiot\client\ClientService;
use iotyun\huaweiiot\client\dto\AuthRefreshInDTO;
use iotyun\huaweiiot\constant\Constant;

date_default_timezone_set('Asia/Hong_Kong');

class Authentication
{
    private $log;
    private $northApiClient;
    private $clientService;

    public function __construct(){

        $a = func_get_args();
        $i = func_num_args();
        if (method_exists($this, $f = '__construct' . $i)) {
            call_user_func_array(array($this, $f), $a);

        }
    }

    function __construct0(){
        $this->northApiClient = DefaultNorthApiClient::getDefaultApiClient();
        $this->clientService = new ClientService();
    }

    function __construct1($northApiClient){
        $this->northApiClient = $northApiClient;
        $this->clientService = new ClientService();
    }

    public function __set($name, $value){
        if (property_exists($this,$name)){
            $this->$name = $value;
        }
    }


    public function __get($name){
        if (property_exists($this,$name)){
            return isset($this->$name) ? $this->$name : null;
        }
    }

    public function getAuthToken(){

        $clientInfo = $this->northApiClient->clientInfo;
        $this->clientService->checkClientInfo($clientInfo);
        $authUrl = "https://" . $clientInfo->platformIp . ":" . $clientInfo->platformPort . Constant::$getAuthTokenUri;
        $formParams = "appId=" . $clientInfo->appId . "&secret=" .  $clientInfo->secret;
        $returnType = 'iotyun\huaweiiot\client\dto\AuthOutDTO';
        $northApiClient = $this->northApiClient;
        $aOutDTO = $northApiClient->invokeAPI($authUrl, "POST", null, null, null, $formParams, null, null, null, $returnType);
        return $aOutDTO;
    }

    public function refreshAuthToken(AuthRefreshInDTO $arInDTO){


        $this->clientService->checkInput($arInDTO);

        $clientInfo = $this->northApiClient->clientInfo;
        $this->clientService->checkClientInfo($clientInfo);

        $authUrl = "https://" . $clientInfo->platformIp . ":" . $clientInfo->platformPort .
            Constant::$refreshAuthTokenUri;
        $param = array();
        $this->clientService->putInIfValueNotEmpty($param, "appId", $arInDTO->appId);
        $this->clientService->putInIfValueNotEmpty($param, "secret",$arInDTO->secret);
        $this->clientService->putInIfValueNotEmpty($param, "refreshToken",$arInDTO->refreshToken);

        $returnType = 'iotyun\huaweiiot\client\dto\AuthRefreshOutDTO';
        $afOutDTO = $this->northApiClient->invokeAPI($authUrl, "POST", null, $param,
            null, null, null, 'application/json', null, $returnType);

        return $afOutDTO;
    }

}