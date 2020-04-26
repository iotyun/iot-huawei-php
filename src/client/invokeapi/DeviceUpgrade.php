<?php
/**
 * Created by PhpStorm.
 * User: hWX538513
 * Date: 2018/10/26
 * Time: 15:33
 */

namespace iotyun\huaweiiot\client\invokeapi;

use iotyun\huaweiiot\client\ClientService;
use iotyun\huaweiiot\client\DefaultNorthApiClient;
use iotyun\huaweiiot\constant\Constant;

date_default_timezone_set('Asia/Hong_Kong');

class DeviceUpgrade
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

    public function queryUpgradePackageList($quplInDTO, $accessToken) {

        $json = json_encode($quplInDTO);
        $queryParams = json_decode($json,true);

        $returnType = 'iotyun\huaweiiot\client\dto\QueryUpgradePackageListOutDTO';
        $result = $this->northApiClient->invokeAPI(null, $accessToken, "GET",
            Constant::$queryUpgradePackageListUri, $queryParams, null, $returnType);


        return $result;
    }

    public function queryUpgradePackage($fileId, $accessToken) {


        $returnType = 'iotyun\huaweiiot\client\dto\QueryUpgradePackageOutDTO';
        $result = $this->northApiClient->invokeAPI(null, $accessToken, "GET",
            Constant::$queryUpgradePackageUri . $fileId, null, null, $returnType);

        return $result;
    }

    public function createFirmwareUpgradeTask($cutInDTO, $accessToken) {


        $returnType = 'iotyun\huaweiiot\client\dto\CreateUpgradeTaskOutDTO';
        $result = $this->northApiClient->invokeAPI(null, $accessToken, "POST",
            Constant::$createFirmwareUpgradeTaskUri, null, $cutInDTO, $returnType);

        return $result;
    }

    public function queryUpgradeTask($operationId, $accessToken) {

        $returnType = 'iotyun\huaweiiot\client\dto\QueryUpgradeTaskOutDTO';
        $result = $this->northApiClient->invokeAPI(null, $accessToken, "GET",
            Constant::$queryUpgradeTaskUri . $operationId, null, null, $returnType);

        return $result;
    }

    public function queryUpgradeSubTask($qustInDTO, $operationId, $accessToken) {

        $json = json_encode($qustInDTO);
        $queryParams = json_decode($json,true);

        $url = sprintf(Constant::$queryUpgradeSubTaskUri,  $operationId);
        $returnType = 'iotyun\huaweiiot\client\dto\QueryUpgradeSubTaskOutDTO';
        $result = $this->northApiClient->invokeAPI(null, $accessToken, "GET", $url, $queryParams, null, $returnType);

        return $result;
    }

    public function deleteUpgradePackage($fileId, $accessToken) {

        $this->northApiClient->invokeAPI(null, $accessToken, "DELETE",
            Constant::$deleteUpgradePackageUri . $fileId, null, null, null);

    }

    public function queryUpgradeTaskList($qutlInDTO, $accessToken) {

        $json = json_encode($qutlInDTO);
        $queryParams = json_decode($json,true);

        $returnType = 'iotyun\huaweiiot\client\dto\QueryUpgradeTaskListOutDTO';
        $result = $this->northApiClient->invokeAPI(null, $accessToken, "GET",
            Constant::$queryUpgradeTaskListUri, $queryParams, null, $returnType);

        return $result;
    }

    public function createSoftwareUpgradeTask($cutInDTO, $accessToken) {

        $returnType = 'iotyun\huaweiiot\client\dto\CreateUpgradeTaskOutDTO';
        $result = $this->northApiClient->invokeAPI(null, $accessToken, "POST",
            Constant::$createSoftwareUpgradeTaskUri, null, $cutInDTO, $returnType);

        return $result;
    }
}