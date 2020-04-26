<?php

namespace iotyun\huaweiiot;

use iotyun\huaweiiot\Auth;
use iotyun\huaweiiot\client\dto\RegDirectDeviceInDTO;
use iotyun\huaweiiot\client\invokeapi\DeviceManagement;
use iotyun\huaweiiot\client\NorthApiException;
use iotyun\huaweiiot\client\dto\RefreshDeviceKeyInDTO;
use iotyun\huaweiiot\client\dto\ModifyDeviceInforInDTO;
use iotyun\huaweiiot\client\dto\ModifyDeviceShadowInDTO;
use iotyun\huaweiiot\client\dto\ServiceDesiredDTO;

class Device
{
    static function registerDevice(array $devicereginfoArray){
        /**---------------------initialize northApiClient------------------------*/
        $northApiClient = Auth::initApiClient($devicereginfoArray);
        $deviceManagement = new DeviceManagement($northApiClient);

        $rddid = new RegDirectDeviceInDTO();

        if (!empty($devicereginfoArray['rddInArray']['imsi'])) {
            $rddid->imsi = $devicereginfoArray['rddInArray']['imsi'];
        }
        if (!empty($devicereginfoArray['rddInArray']['isSecure'])) {
            $rddid->isSecure = $devicereginfoArray['rddInArray']['isSecure'];
        }
        if (!empty($devicereginfoArray['rddInArray']['verifyCode'])) {
            $rddid->verifyCode = $devicereginfoArray['rddInArray']['verifyCode'];
        }
        if (!empty($devicereginfoArray['rddInArray']['nodeId'])) {
            $rddid->nodeId = $devicereginfoArray['rddInArray']['nodeId'];
        }
        if (!empty($devicereginfoArray['rddInArray']['endUserId'])) {
            $rddid->endUserId = $devicereginfoArray['rddInArray']['endUserId'];
        }
        if (!empty($devicereginfoArray['rddInArray']['psk'])) {
            $rddid->psk = $devicereginfoArray['rddInArray']['psk'];
        }
        if (!empty($devicereginfoArray['rddInArray']['timeout'])) {
            $rddid->timeout = $devicereginfoArray['rddInArray']['timeout'];
        }
        else
        {
            $rddid->timeout = 0;
        }
        if (!empty($devicereginfoArray['rddInArray']['productId'])) {
            $rddid->productId = $devicereginfoArray['rddInArray']['productId'];
        }
        if (!empty($devicereginfoArray['rddInArray']['deviceInfoArray'])) {
            $rddid->deviceInfo = $devicereginfoArray['rddInArray']['deviceInfoArray'];
        }

        try {
            $DeviceInfoDTO = $deviceManagement->regDirectDevice($rddid, null, $devicereginfoArray['accessToken']);
            return $DeviceInfoDTO;
        } catch (NorthApiException $e) {
            return $e;
        }
    }

    public static function refreshDeviceKey($refreshDeviceKeyArray) {
        $northApiClient = Auth::initApiClient($refreshDeviceKeyArray);
        $deviceManagement = new DeviceManagement($northApiClient);

        $rdkInDTO = new RefreshDeviceKeyInDTO();
        if (!empty($refreshDeviceKeyArray['rddInArray']['verifyCode'])) {
            $rdkInDTO->verifyCode = $refreshDeviceKeyArray['rddInArray']['verifyCode'];
        }
        if (!empty($refreshDeviceKeyArray['rddInArray']['nodeId'])) {
            $rdkInDTO->nodeId = $refreshDeviceKeyArray['rddInArray']['nodeId'];
        }
        if (!empty($refreshDeviceKeyArray['rddInArray']['timeout'])) {
            $rdkInDTO->timeout = $refreshDeviceKeyArray['rddInArray']['timeout'];
        }
        else
        {
            $rdkInDTO->timeout = 0;
        }

        try {
            $rdkOutDTO = $deviceManagement->refreshDeviceKey($rdkInDTO, $refreshDeviceKeyArray['deviceId'], null, $refreshDeviceKeyArray['accessToken']);
            return $rdkOutDTO;
        } catch (NorthApiException $e) {
            return $e;
        }
    }
    
    public static function modifyDeviceInfo($modifyDeviceInfoArray) {
        $northApiClient = Auth::initApiClient($modifyDeviceInfoArray);
        $deviceManagement = new DeviceManagement($northApiClient);

        $mdiInDTO = new ModifyDeviceInforInDTO();
        if (!empty($modifyDeviceInfoArray['mdiInArray']['customFields'])) {
            $mdiInDTO->customFields = $modifyDeviceInfoArray['mdiInArray']['customFields'];
        }
        if (!empty($modifyDeviceInfoArray['mdiInArray']['imsi'])) {
            $mdiInDTO->imsi = $modifyDeviceInfoArray['mdiInArray']['imsi'];
        }
        if (!empty($modifyDeviceInfoArray['mdiInArray']['name'])) {
            $mdiInDTO->name = $modifyDeviceInfoArray['mdiInArray']['name'];
        }
        if (!empty($modifyDeviceInfoArray['mdiInArray']['endUser'])) {
            $mdiInDTO->endUser = $modifyDeviceInfoArray['mdiInArray']['endUser'];
        }
        if (!empty($modifyDeviceInfoArray['mdiInArray']['mute'])) {
            $mdiInDTO->mute = $modifyDeviceInfoArray['mdiInArray']['mute'];
        }
        if (!empty($modifyDeviceInfoArray['mdiInArray']['manufacturerId'])) {
            $mdiInDTO->manufacturerId = $modifyDeviceInfoArray['mdiInArray']['manufacturerId'];
        }
        if (!empty($modifyDeviceInfoArray['mdiInArray']['manufacturerName'])) {
            $mdiInDTO->manufacturerName = $modifyDeviceInfoArray['mdiInArray']['manufacturerName'];
        }
        if (!empty($modifyDeviceInfoArray['mdiInArray']['deviceType'])) {
            $mdiInDTO->deviceType = $modifyDeviceInfoArray['mdiInArray']['deviceType'];
        }
        if (!empty($modifyDeviceInfoArray['mdiInArray']['model'])) {
            $mdiInDTO->model = $modifyDeviceInfoArray['mdiInArray']['model'];
        }
        if (!empty($modifyDeviceInfoArray['mdiInArray']['location'])) {
            $mdiInDTO->location = $modifyDeviceInfoArray['mdiInArray']['location'];
        }
        if (!empty($modifyDeviceInfoArray['mdiInArray']['protocolType'])) {
            $mdiInDTO->protocolType = $modifyDeviceInfoArray['mdiInArray']['protocolType'];
        }
        if (!empty($modifyDeviceInfoArray['mdiInArray']['deviceConfig'])) {
            $mdiInDTO->deviceConfig = $modifyDeviceInfoArray['mdiInArray']['deviceConfig'];
        }
        if (!empty($modifyDeviceInfoArray['mdiInArray']['region'])) {
            $mdiInDTO->region = $modifyDeviceInfoArray['mdiInArray']['region'];
        }
        if (!empty($modifyDeviceInfoArray['mdiInArray']['organization'])) {
            $mdiInDTO->organization = $modifyDeviceInfoArray['mdiInArray']['organization'];
        }
        if (!empty($modifyDeviceInfoArray['mdiInArray']['timezone'])) {
            $mdiInDTO->timezone = $modifyDeviceInfoArray['mdiInArray']['timezone'];
        }
        if (!empty($modifyDeviceInfoArray['mdiInArray']['ip'])) {
            $mdiInDTO->ip = $modifyDeviceInfoArray['mdiInArray']['ip'];
        }
        if (!empty($modifyDeviceInfoArray['mdiInArray']['isSecure'])) {
            $mdiInDTO->isSecure = $modifyDeviceInfoArray['mdiInArray']['isSecure'];
        }
        if (!empty($modifyDeviceInfoArray['mdiInArray']['psk'])) {
            $mdiInDTO->psk = $modifyDeviceInfoArray['mdiInArray']['psk'];
        }
        if (!empty($modifyDeviceInfoArray['mdiInArray']['tags'])) {
            $mdiInDTO->tags = $modifyDeviceInfoArray['mdiInArray']['tags'];
        }
        
		try {
            $deviceManagement->modifyDeviceInfo($mdiInDTO, $modifyDeviceInfoArray['deviceId'], null, $modifyDeviceInfoArray['accessToken']);
            return "modify device info succeeded";
        } catch (NorthApiException $e) {
            return $e;
        }
    }

    public static function queryDeviceStatus($queryDeviceStatusArray){
        $northApiClient = Auth::initApiClient($queryDeviceStatusArray);
        $deviceManagement = new DeviceManagement($northApiClient);

		try {
            $qdsOutDTO = $deviceManagement->queryDeviceStatus($queryDeviceStatusArray['deviceId'], null, $queryDeviceStatusArray['accessToken']);
            return $qdsOutDTO;
        } catch (NorthApiException $e) {
            return $e;
        }
    }

    public static function queryDeviceShadow($queryDeviceShadowArray){
        $northApiClient = Auth::initApiClient($queryDeviceShadowArray);
        $deviceManagement = new DeviceManagement($northApiClient);

		try {
            $qdshadowOutDTO = $deviceManagement->queryDeviceShadow($queryDeviceShadowArray['deviceId'], null, $queryDeviceShadowArray['accessToken']);
            return $qdshadowOutDTO;
        } catch (NorthApiException $e) {
            return $e;
        }
    }

    public static function modifyDeviceShadow($modifyDeviceShadowArray) {
        $northApiClient = Auth::initApiClient($modifyDeviceShadowArray);
        $deviceManagement = new DeviceManagement($northApiClient);

        $mdsInDTO = new ModifyDeviceShadowInDTO();
        $sdDTO = new ServiceDesiredDTO();
        $sdDTO->serviceId = "Brightness";
        $arr = array("brightness" => 100);
        $sdDTO->desired = $arr;

        $serviceDesireds = array($sdDTO);
        

        $mdsInDTO->serviceDesireds = $serviceDesireds;
        echo $mdsInDTO;

        try {
            $deviceManagement->modifyDeviceShadow($mdsInDTO, $modifyDeviceShadowArray['deviceId'], null, $modifyDeviceShadowArray['accessToken']);
            return "modify device shadow succeeded";
        } catch (NorthApiException $e) {
            return $e;
        }
     }
//1.1
}