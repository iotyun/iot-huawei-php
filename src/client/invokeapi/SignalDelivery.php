<?php
/**
 * Created by PhpStorm.
 * User: hWX538513
 * Date: 2018/10/25
 * Time: 10:07
 */

namespace iotyun\huaweiiot\client\invokeapi;

use iotyun\huaweiiot\client\ClientService;
use iotyun\huaweiiot\client\DefaultNorthApiClient;
use iotyun\huaweiiot\client\NorthApiException;
use iotyun\huaweiiot\constant\Constant;
use iotyun\huaweiiot\constant\ExceptionEnum;
use iotyun\huaweiiot\client\dto\PostDeviceCommandInDTO;

date_default_timezone_set('Asia/Hong_Kong');
class SignalDelivery {
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

    public function postDeviceCommand($pdcInDTO, $appId, $accessToken) {

        $returnType = 'iotyun\huaweiiot\client\dto\PostDeviceCommandOutDTO';
        $result = $this->northApiClient->invokeAPI($appId, $accessToken, "POST",
            Constant::$postDeviceCommandUri, null, $pdcInDTO, $returnType);

        return $result;
    }

    public function updateDeviceCommand($udcInDTO, $deviceCommandId, $appId, $accessToken) {

        $this->clientService->checkInput($deviceCommandId);

        $returnType = 'iotyun\huaweiiot\client\dto\UpdateDeviceCommandOutDTO';
        $result = $this->northApiClient->invokeAPI($appId, $accessToken, "PUT",
            Constant::$updateDeviceCommandUri . $deviceCommandId, null, $udcInDTO, $returnType);

        return $result;
    }

    public function queryDeviceCommand($qdcInDTO, $accessToken) {

        $queryParams = (array)$qdcInDTO;
        $returnType = 'iotyun\huaweiiot\client\dto\QueryDeviceCommandOutDTO';
        $result = $this->northApiClient->invokeAPI(null, $accessToken, "GET",
            Constant::$queryDeviceCommandUri, $queryParams, null, $returnType);

        return $result;
    }

    public function createDeviceCmdCancelTask($cdcctInDTO, $appId, $accessToken) {

        $returnType = 'iotyun\huaweiiot\client\dto\CreateDeviceCmdCancelTaskOutDTO';
        $result = $this->northApiClient->invokeAPI($appId, $accessToken, "POST",
            Constant::$createDeviceCmdCancelTaskUri, null, $cdcctInDTO, $returnType);

        return $result;
    }

    public function queryDeviceCmdCancelTask($qdcctInDTO, $accessToken) {

        $queryParams = (array)$qdcctInDTO;

        $returnType = 'iotyun\huaweiiot\client\dto\QueryDeviceCmdCancelTaskOutDTO';
        $result = $this->northApiClient->invokeAPI(null, $accessToken, "GET",
            Constant::$queryDeviceCmdCancelTaskUri, $queryParams, null, $returnType);

        return $result;
    }
}