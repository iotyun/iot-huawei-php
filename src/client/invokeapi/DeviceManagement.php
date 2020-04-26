<?php
/**
 * Created by PhpStorm.
 * User: hWX538513
 * Date: 2018/10/15
 * Time: 15:56
 */

namespace iotyun\huaweiiot\client\invokeapi;


use iotyun\huaweiiot\client\ClientService;
use iotyun\huaweiiot\client\DefaultNorthApiClient;
use iotyun\huaweiiot\client\NorthApiException;
use iotyun\huaweiiot\constant\Constant;
use iotyun\huaweiiot\constant\ExceptionEnum;

date_default_timezone_set('Asia/Hong_Kong');
class DeviceManagement
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

    public function regDirectDevice($rddInDto, $appId, $accessToken){

        $returnType = 'iotyun\huaweiiot\client\dto\RegDirectDeviceOutDTO';
        try{
            $result = $this->northApiClient->invokeAPI($appId, $accessToken, "POST",
                Constant::$regDirectDeviceUri, null, $rddInDto, $returnType);

            return $result;
        }catch (NorthApiException $nae){
            return $nae;
        }

    }
    
    public function modifyDeviceInfo($mdiInDto, $deviceId, $appId, $accessToken){

        $this->clientService->checkInput($mdiInDto);
        $this->clientService->checkInput($deviceId);

        try{
            $this->northApiClient->invokeAPI($appId, $accessToken, "PUT",
                Constant::$modifyDeviceInfoUri . $deviceId, null, $mdiInDto, null);

        }catch (NorthApiException $nae){
            return $nae;
        }

    }
    
    public function queryDeviceStatus($deviceId, $appId, $accessToken){

        $this->clientService->checkInput($deviceId);
        $returnType = 'iotyun\huaweiiot\client\dto\QueryDeviceStatusOutDTO';

        $result = $this->northApiClient->invokeAPI($appId, $accessToken, "GET",
            Constant::$queryDeviceStatusUri . $deviceId, null, null, $returnType);

        return $result;
    }

    public function queryDeviceRealtimeLocation($qdrlInDTO, $appId, $accessToken){


        $returnType = 'iotyun\huaweiiot\client\dto\QueryDeviceRealtimeLocationOutDTO';

        $result = $this->northApiClient->invokeAPI($appId, $accessToken, "POST",
            Constant::$queryDeviceRealtimeLocationUri, null, $qdrlInDTO, $returnType);

    }

    public function modifyDeviceShadow($mdsInDTO, $deviceId, $appId, $accessToken){


        $this->clientService->checkInput($deviceId);
        $this->northApiClient->invokeAPI($appId, $accessToken, "PUT",
            Constant::$modifyDeviceShadowUri . $deviceId, null, $mdsInDTO, null);

    }

    public function queryDeviceShadow($deviceId, $appId, $accessToken){
        
        $this->clientService->checkInput($deviceId);

        $returnType = 'iotyun\huaweiiot\client\dto\QueryDeviceShadowOutDTO';

        $result = $this->northApiClient->invokeAPI($appId, $accessToken, "GET",
            Constant::$queryDeviceShadowUri . $deviceId, null, null, $returnType);
        return $result;
    }

    public function refreshDeviceKey($rdkInDTO, $deviceId, $appId, $accessToken){

        $this->clientService->checkInput($deviceId);

        $returnType = 'iotyun\huaweiiot\client\dto\RefreshDeviceKeyOutDTO';
        $result = $this->northApiClient->invokeAPI($appId, $accessToken, "PUT",
            Constant::$refreshDeviceKeyUri . $deviceId, null, $rdkInDTO, $returnType);

        return $result;
    }

    public function deleteDirectDevice($deviceId, $cascade, $appId, $accessToken){

        $queryParams = array();
        if ($cascade != null) {
            $this->clientService->putInIfValueNotEmpty($queryParams, "cascade", $cascade);
        }
        $this->clientService->checkInput($deviceId);
        $this->northApiClient->invokeAPI($appId, $accessToken, "DELETE",
            Constant::$deleteDirectDeviceUri . $deviceId, $queryParams, null, null);

    }
}