<?php
/**
 * Created by PhpStorm.
 * User: hWX538513
 * Date: 2018/10/26
 * Time: 10:14
 */

namespace iotyun\huaweiiot\client\invokeapi;

use iotyun\huaweiiot\client\ClientService;
use iotyun\huaweiiot\client\DefaultNorthApiClient;
use iotyun\huaweiiot\constant\Constant;

date_default_timezone_set('Asia/Hong_Kong');

class DeviceGroupManagement
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

    private function getQueryParas($accessAppId) {
        if ($accessAppId == null) {
            return null;
        }

        $queryParams = array();
        $this->clientService->putInIfValueNotEmpty($queryParams, "accessAppId", $accessAppId);
        return $queryParams;
    }

    public function createDeviceGroup($cdgInDTO, $accessToken) {


        $returnType = 'iotyun\huaweiiot\client\dto\CreateDeviceGroupOutDTO';
        $result = $this->northApiClient->invokeAPI(null, $accessToken, "POST",
            Constant::$createDeviceGroupUri, null, $cdgInDTO, $returnType);

        return $result;
    }

    public function modifyDeviceGroup($mdgInDTO, $devGroupId, $accessAppId, $accessToken) {


        $returnType = 'iotyun\huaweiiot\client\dto\ModifyDeviceGroupOutDTO';

        $result = $this->northApiClient->invokeAPI(null, $accessToken, "PUT",
            Constant::$modifyDeviceGroupUri . $devGroupId,
            $this->getQueryParas($accessAppId), $mdgInDTO, $returnType);

        return $result;
    }

    public function querySingleDeviceGroup($devGroupId, $accessAppId, $accessToken) {


        $returnType = 'iotyun\huaweiiot\client\dto\QuerySingleDeviceGroupOutDTO';
        $result = $this->northApiClient->invokeAPI(null, $accessToken, "GET",
            Constant::$querySingleDeviceGroupUri . $devGroupId,
            $this->getQueryParas($accessAppId), null, $returnType);

        return $result;
    }

    public function queryDeviceGroupMembers($qdgmInDTO, $accessToken) {

        $json = json_encode($qdgmInDTO);
        $queryParams = json_decode($json,true);

        $returnType = 'iotyun\huaweiiot\client\dto\QueryDeviceGroupMembersOutDTO';
        $result = $this->northApiClient->invokeAPI(null, $accessToken, "GET",
            Constant::$queryDeviceGroupMembersUri, $queryParams, null, $returnType);

        return $result;
    }

    public function addDevicesToGroup($dgwdlDTO, $accessAppId, $accessToken) {

        $returnType = 'iotyun\huaweiiot\client\dto\DeviceGroupWithDeviceListDTO';
        $result = $this->northApiClient->invokeAPI(null, $accessToken, "POST",
            Constant::$addDevicesToGroupUri,
            $this->getQueryParas($accessAppId), $dgwdlDTO, $returnType);

        return $result;
    }

    public function deleteDevicesFromGroup($dgwdlDTO, $accessAppId, $accessToken) {
        
        $this->northApiClient->invokeAPI(null, $accessToken, "POST", Constant::$deleteDevicesFromGroupUri, $this->getQueryParas($accessAppId), $dgwdlDTO, null);

    }

    public function queryDeviceGroups($qdgInDTO, $accessToken) {

        $json = json_encode($qdgInDTO);
        $queryParams = json_decode($json,true);

        $returnType = 'iotyun\huaweiiot\client\dto\QueryDeviceGroupsOutDTO';
        $result = $this->northApiClient->invokeAPI(null, $accessToken, "GET",
            Constant::$queryDeviceGroupsUri, $queryParams, $qdgInDTO, $returnType);

        return $result;
    }

    public function deleteDeviceGroup($devGroupId, $accessAppId, $accessToken) {

        $this->northApiClient->invokeAPI(null, $accessToken, "DELETE",
            Constant::$deleteDeviceGroupUri . $devGroupId,
            $this->getQueryParas($accessAppId), null, null);

    }
}