<?php
/**
 * Created by PhpStorm.
 * User: hWX538513
 * Date: 2018/10/25
 * Time: 15:22
 */

namespace iotyun\huaweiiot\client\invokeapi;

use iotyun\huaweiiot\client\ClientService;
use iotyun\huaweiiot\client\DefaultNorthApiClient;
use iotyun\huaweiiot\client\NorthApiException;
use iotyun\huaweiiot\constant\Constant;
use iotyun\huaweiiot\constant\ExceptionEnum;
use iotyun\huaweiiot\client\dto\PostDeviceCommandInDTO;

date_default_timezone_set('Asia/Hong_Kong');

class DeviceServiceInvocation
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

    public function invokeDeviceService($deviceId, $serviceId, $commandDTO, $appId, $accessToken) {

        $url = sprintf(Constant::$invokeDeviceServiceUri, $deviceId, $serviceId );
        $returnType = 'iotyun\huaweiiot\client\dto\InvokeDeviceServiceOutDTO';

        $result = $this->northApiClient->invokeAPI($appId, $accessToken, "POST",
            $url, null, $commandDTO, $returnType);

        return $result;
    }
}