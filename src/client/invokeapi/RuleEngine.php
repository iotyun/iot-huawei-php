<?php
/**
 * Created by PhpStorm.
 * User: hWX538513
 * Date: 2018/10/18
 * Time: 16:51
 */

namespace iotyun\huaweiiot\client\invokeapi;

use iotyun\huaweiiot\client\ClientService;
use iotyun\huaweiiot\client\DefaultNorthApiClient;
use iotyun\huaweiiot\client\NorthApiException;
use iotyun\huaweiiot\constant\Constant;
use iotyun\huaweiiot\constant\ExceptionEnum;
use iotyun\huaweiiot\client\dto\RuleDTO;

date_default_timezone_set('Asia/Hong_Kong');

class RuleEngine
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

    public function createRule($ruleDTO, $appId, $accessToken) {

        $returnType = 'iotyun\huaweiiot\client\dto\RuleCreateOrUpdateOutDTO';
        $result = $this->northApiClient->invokeAPI($appId, $accessToken, "POST",
            Constant::$createRuleUri, null, $ruleDTO, $returnType);

        return $result;
    }

    public function updateRule($ruleDTO, $appId, $accessToken) {

        $returnType = 'iotyun\huaweiiot\client\dto\RuleCreateOrUpdateOutDTO';
        $result = $this->northApiClient->invokeAPI($appId, $accessToken, "PUT",
            Constant::$updateRuleUri, null, $ruleDTO, $returnType);

        return $result;
    }

    public function deleteRule($ruleId, $appId, $accessToken) {

        $this->clientService->checkInput($ruleId);
        $this->northApiClient->invokeAPI($appId, $accessToken, "DELETE",
            Constant::$deleteRuleUri . $ruleId, null, null, null);

    }

    public function updateRuleStatus($ursInDTO, $appId, $accessToken) {

        $this->clientService->checkInput($ursInDTO);
        $this->clientService->checkInput($ursInDTO->ruleId);
        $this->clientService->checkInput($ursInDTO->status);

        $url = sprintf(Constant::$updateRuleStatusUri, $ursInDTO->ruleId,$ursInDTO->status);
        $this->northApiClient->invokeAPI($appId, $accessToken, "PUT", $url, null, "{}", null);

    }

    public function queryRules($qrInDTO, $accessToken) {

        $queryParams = json_decode(json_encode($qrInDTO), true);
        $returnType = 'array';
        $arr = $this->northApiClient->invokeAPI(null, $accessToken, "GET",
            Constant::$queryRulesUri, $queryParams, null, $returnType);

        $returnArr = [];
        foreach ($arr as $item) {
            $ruleDTO2 = new RuleDTO();

            foreach ($item as $key=>$value){
                $ruleDTO2->$key = $value;
            }
            $returnArr[] = $ruleDTO2;
        }

        return $returnArr;
    }

    public function updateBatchRuleStatus($ubrsInDTO, $appId, $accessToken) {

        $returnType = 'iotyun\huaweiiot\client\dto\UpdateBatchRuleStatusOutDTO';
        $result = $this->northApiClient->invokeAPI($appId, $accessToken, "PUT", Constant::$updateBatchRuleStatusUri,
            null, $ubrsInDTO, $returnType);

        return $result;
    }

}