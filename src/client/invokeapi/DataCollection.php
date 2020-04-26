<?php
/**
 * Created by PhpStorm.
 * User: hWX538513
 * Date: 2018/10/25
 * Time: 16:10
 */

namespace iotyun\huaweiiot\client\invokeapi;

use iotyun\huaweiiot\client\ClientService;
use iotyun\huaweiiot\client\DefaultNorthApiClient;
use iotyun\huaweiiot\client\NorthApiException;
use iotyun\huaweiiot\constant\Constant;
use iotyun\huaweiiot\constant\ExceptionEnum;
use iotyun\huaweiiot\client\dto\PostDeviceCommandInDTO;

date_default_timezone_set('Asia/Hong_Kong');
class DataCollection
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

    public function querySingleDeviceInfo($deviceId, $select, $appId, $accessToken) {

        $queryParams = null;
        if ($select != null) {
            $queryParams = array();
            $this->clientService->putInIfValueNotEmpty($queryParams, "select", $select);
        }

        $returnType = 'iotyun\huaweiiot\client\dto\QuerySingleDeviceInfoOutDTO';
        $result = $this->northApiClient->invokeAPI($appId, $accessToken, "GET",
            Constant::$querySingleDeviceInfoUri . $deviceId, $queryParams, null, $returnType);

        return $result;
    }

    public function queryBatchDevicesInfo($qbdiInDTO, $accessToken) {

        $json = json_encode($qbdiInDTO);
        $queryParams = json_decode($json,true);
        $returnType = 'iotyun\huaweiiot\client\dto\QueryBatchDevicesInfoOutDTO';

        $result = $this->northApiClient->invokeAPI(null, $accessToken, "GET",
            Constant::$queryBatchDevicesInfoUri, $queryParams, null, $returnType);

        return $result;
    }

    public function queryDeviceDataHistory($qddhInDTO, $accessToken) {

        $json = json_encode($qddhInDTO);
        $queryParams = json_decode($json,true);

        $returnType = 'iotyun\huaweiiot\client\dto\QueryDeviceDataHistoryOutDTO';
        $result = $this->northApiClient->invokeAPI(null, $accessToken, "GET",
            Constant::$queryDeviceDataHistoryUri, $queryParams, null, $returnType);

        return $result;
    }

    public function queryDeviceDesiredHistory($qddhInDTO, $accessToken) {

        $json = json_encode($qddhInDTO);
        $queryParams = json_decode($json,true);

        $returnType = 'iotyun\huaweiiot\client\dto\QueryDeviceDesiredHistoryOutDTO';
        $result = $this->northApiClient->invokeAPI(null, $accessToken, "GET",
            Constant::$queryDeviceDesiredHistoryUri, $queryParams, null, $returnType);

        return $result;
    }

    public function queryDeviceCapabilities($qdcInDTO, $accessToken) {

        $json = json_encode($qdcInDTO);
        $queryParams = json_decode($json,true);

        $returnType = 'iotyun\huaweiiot\client\dto\QueryDeviceCapabilitiesOutDTO';
        $result = $this->northApiClient->invokeAPI(null, $accessToken, "GET",
            Constant::$queryDeviceCapabilitiesUri, $queryParams, null, $returnType);

        return $result;
    }
}