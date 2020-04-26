<?php
/**
 * Created by PhpStorm.
 * User: hWX538513
 * Date: 2018/10/19
 * Time: 16:19
 */

namespace iotyun\huaweiiot\client\invokeapi;

use iotyun\huaweiiot\client\ClientService;
use iotyun\huaweiiot\client\DefaultNorthApiClient;
use iotyun\huaweiiot\client\NorthApiException;
use iotyun\huaweiiot\constant\Constant;

date_default_timezone_set('Asia/Hong_Kong');

class SubscriptionManagement
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


    function __call ($name, $args ){
        if($name=='subDeviceData') {
            $i=count($args);
            if (method_exists($this,$f='subDeviceData'.$i)) {
                $obj = call_user_func_array(array($this,$f),$args);
                return $obj;
            }
        }
    }

    public function subDeviceData3($sddInDTO, $ownerFlag, $accessToken) {

        $queryParams = null;
        if ($ownerFlag != null) {
            $queryParams = array();
            $this->clientService->putInIfValueNotEmpty($queryParams, "ownerFlag", $ownerFlag);
        }

        $returnType = 'iotyun\huaweiiot\client\dto\SubscriptionDTO';
        try{
            $ret =  $this->northApiClient->invokeAPI(null, $accessToken, "POST",
                Constant::$subDeviceData3Uri, $queryParams, $sddInDTO, $returnType);

            return $ret;
        }catch (NorthApiException $e){
            echo $e;
            return null;
        }

    }

    public function subDeviceData2($smdInDTO, $accessToken) {

        try{
            $ret = $this->northApiClient->invokeAPI(null, $accessToken, "POST",
                Constant::$subDeviceData2Uri, null, $smdInDTO, null);

            return $ret;
        }catch (NorthApiException $e){
            echo $e;
            return null;
        }

    }

    public function querySingleSubscription($subscriptionId, $appId, $accessToken) {

        $returnType = 'iotyun\huaweiiot\client\dto\SubscriptionDTO';
        try{
            $ret = $this->northApiClient->invokeAPI($appId, $accessToken, "GET",
                Constant::$querySingleSubscriptionUri . $subscriptionId, null, null, $returnType);
            return $ret;
        }catch (NorthApiException $e){
            echo $e;
            return null;
        }

    }

    public function deleteSingleSubscription($subscriptionId, $appId, $accessToken) {

        try{
            $this->northApiClient->invokeAPI($appId, $accessToken, "DELETE",
                Constant::$deleteSingleSubscriptionUri . $subscriptionId, null, null, null);
        }catch (NorthApiException $e){
            echo $e;
        }

    }

    public function queryBatchSubscriptions($qbsInDTO, $accessToken) {

        $queryParams = (array)$qbsInDTO;
        $returnType = 'iotyun\huaweiiot\client\dto\QueryBatchSubOutDTO';
        try{
            $ret = $this->northApiClient->invokeAPI(null, $accessToken, "GET",
                Constant::$queryBatchSubscriptionsUri, $queryParams, null, $returnType);

            return $ret;
        }catch (NorthApiException $e){
            echo $e;
        }

    }

    public function deleteBatchSubscriptions($dbsInDTO, $accessToken){

        $queryParams = (array)$dbsInDTO;
        $this->northApiClient->invokeAPI(null, $accessToken, "DELETE",
            Constant::$deleteBatchSubscriptionsUri, $queryParams, null, null);

    }
}