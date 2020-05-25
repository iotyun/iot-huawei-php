<?php

namespace iotyun\huaweiiot;

use iotyun\huaweiiot\Auth;
use iotyun\huaweiiot\client\dto\QueryBatchDevicesInfoInDTO;
use iotyun\huaweiiot\client\invokeapi\DataCollection;
use iotyun\huaweiiot\client\NorthApiException;
use iotyun\huaweiiot\client\dto\QueryDeviceDataHistoryInDTO;
use iotyun\huaweiiot\client\dto\QueryDeviceDesiredHistoryInDTO;
use iotyun\huaweiiot\client\dto\QueryDeviceCapabilitiesInDTO;

class Data
{
    //查询批量设备信息
    static function queryBatchDevicesInfo(array $queryBatchDevicesInfoArray){
        $northApiClient = Auth::initApiClient($queryBatchDevicesInfoArray);
        /**---------------------query batch device info------------------------*/
        $dataCollection = new DataCollection($northApiClient);

        $qbdiInDTO = new QueryBatchDevicesInfoInDTO();
        if (empty($queryBatchDevicesInfoArray['qbdiInArray']['pageNo']))
        {
            $queryBatchDevicesInfoArray['qbdiInArray']['pageNo'] = 0;
        }
        $qbdiInDTO->pageNo = $queryBatchDevicesInfoArray['qbdiInArray']['pageNo'];
        if (empty($queryBatchDevicesInfoArray['qbdiInArray']['pageSize']))
        {
            $queryBatchDevicesInfoArray['qbdiInArray']['pageSize'] = 25;
        }
        $qbdiInDTO->pageSize = $queryBatchDevicesInfoArray['qbdiInArray']['pageSize'];
        if (!empty($queryBatchDevicesInfoArray['qbdiInArray']['appId']))
        {
            $qbdiInDTO->appId = $queryBatchDevicesInfoArray['qbdiInArray']['appId'];
        }

        if (!empty($queryBatchDevicesInfoArray['qbdiInArray']['gatewayId']))
        {
            $qbdiInDTO->gatewayId = $queryBatchDevicesInfoArray['qbdiInArray']['gatewayId'];
        }
        if (!empty($queryBatchDevicesInfoArray['qbdiInArray']['nodeType']))
        {
            $qbdiInDTO->nodeType = $queryBatchDevicesInfoArray['qbdiInArray']['nodeType'];
        }
        if (!empty($queryBatchDevicesInfoArray['qbdiInArray']['deviceType']))
        {
            $qbdiInDTO->deviceType = $queryBatchDevicesInfoArray['qbdiInArray']['deviceType'];
        }
        if (!empty($queryBatchDevicesInfoArray['qbdiInArray']['location']))
        {
            $qbdiInDTO->location = $queryBatchDevicesInfoArray['qbdiInArray']['location'];
        }
        if (!empty($queryBatchDevicesInfoArray['qbdiInArray']['name']))
        {
            $qbdiInDTO->name = $queryBatchDevicesInfoArray['qbdiInArray']['name'];
        }
        if (!empty($queryBatchDevicesInfoArray['qbdiInArray']['status']))
        {
            $qbdiInDTO->status = $queryBatchDevicesInfoArray['qbdiInArray']['status'];
        }
        if (!empty($queryBatchDevicesInfoArray['qbdiInArray']['startTime']))
        {
            $qbdiInDTO->startTime = $queryBatchDevicesInfoArray['qbdiInArray']['startTime'];
        }
        if (!empty($queryBatchDevicesInfoArray['qbdiInArray']['endTime']))
        {
            $qbdiInDTO->endTime = $queryBatchDevicesInfoArray['qbdiInArray']['endTime'];
        }
        if (!empty($queryBatchDevicesInfoArray['qbdiInArray']['sort']))
        {
            $qbdiInDTO->sort = $queryBatchDevicesInfoArray['qbdiInArray']['sort'];
        }
        if (!empty($queryBatchDevicesInfoArray['qbdiInArray']['select']))
        {
            $qbdiInDTO->select = $queryBatchDevicesInfoArray['qbdiInArray']['select'];
        }
        
        try {
            $qbdiOutDTO = $dataCollection->queryBatchDevicesInfo($qbdiInDTO, $queryBatchDevicesInfoArray['accessToken']);
            if ($qbdiOutDTO != null) {
                return $qbdiOutDTO;
            }
        } catch (NorthApiException $e) {
            return $e;
        }
    }
    //查询单个设备信息
    static function querySingleDeviceInfo(array $querySingleDeviceInfoArray){
        $northApiClient = Auth::initApiClient($querySingleDeviceInfoArray);
        /**---------------------query device info------------------------*/
        $dataCollection = new DataCollection($northApiClient);

        $deviceId = $querySingleDeviceInfoArray['deviceId'];
        if (!empty($querySingleDeviceInfoArray['select']))
        {
            $select = $querySingleDeviceInfoArray['select'];
        }
        else
        {
            $select = null;
        }
        if (!empty($querySingleDeviceInfoArray['appId']))
        {
            $appId = $querySingleDeviceInfoArray['appId'];
        }
        else
        {
            $appId = null;
        }

        try {
            $qsdiOutDTO = $dataCollection->querySingleDeviceInfo($deviceId, $select, $appId, $querySingleDeviceInfoArray['accessToken']);
            return $qsdiOutDTO;
        } catch (NorthApiException $e) {
            return $e;
        }
    }

    static function queryDeviceDataHistory(array $queryDeviceDataHistoryArray){
        $northApiClient = Auth::initApiClient($queryDeviceDataHistoryArray);
        /**---------------------query device data history------------------------*/
        $dataCollection = new DataCollection($northApiClient);
        $qddhInDTO = new QueryDeviceDataHistoryInDTO();
        if (!empty($queryDeviceDataHistoryArray['qddhInArray']['appId']))
        {
            $qddhInDTO->appId = $queryDeviceDataHistoryArray['qddhInArray']['appId'];
        }
        else
        {
            $qddhInDTO->appId = null;
        }
        if (!empty($queryDeviceDataHistoryArray['qddhInArray']['deviceId']))
        {
            $qddhInDTO->deviceId = $queryDeviceDataHistoryArray['qddhInArray']['deviceId'];
        }
        if (!empty($queryDeviceDataHistoryArray['qddhInArray']['gatewayId']))
        {
            $qddhInDTO->gatewayId = $queryDeviceDataHistoryArray['qddhInArray']['gatewayId'];
        }
        if (!empty($queryDeviceDataHistoryArray['qddhInArray']['serviceId']))
        {
            $qddhInDTO->serviceId = $queryDeviceDataHistoryArray['qddhInArray']['serviceId'];
        }
        if (!empty($queryDeviceDataHistoryArray['qddhInArray']['property']))
        {
            $qddhInDTO->property = $queryDeviceDataHistoryArray['qddhInArray']['property'];
        }
        if (!empty($queryDeviceDataHistoryArray['qddhInArray']['pageNo']))
        {
            $qddhInDTO->pageNo = $queryDeviceDataHistoryArray['qddhInArray']['pageNo'];
        }
        if (!empty($queryDeviceDataHistoryArray['qddhInArray']['pageSize']))
        {
            $qddhInDTO->pageSize = $queryDeviceDataHistoryArray['qddhInArray']['pageSize'];
        }
        if (!empty($queryDeviceDataHistoryArray['qddhInArray']['startTime']))
        {
            $qddhInDTO->startTime = $queryDeviceDataHistoryArray['qddhInArray']['startTime'];
        }
        if (!empty($queryDeviceDataHistoryArray['qddhInArray']['endTime']))
        {
            $qddhInDTO->endTime = $queryDeviceDataHistoryArray['qddhInArray']['endTime'];
        }

        try {
            $qddhOutDTO = $dataCollection->queryDeviceDataHistory($qddhInDTO, $queryDeviceDataHistoryArray['accessToken']);
            return $qddhOutDTO;
        } catch (NorthApiException $e) {
            return $e;
        }
    }
    static function queryDeviceDesiredHistory(array $queryDeviceDesiredHistoryArray){
        $northApiClient = Auth::initApiClient($queryDeviceDesiredHistoryArray);
        /**---------------------query device desired history------------------------*/
        $dataCollection = new DataCollection($northApiClient);
        $qddesiredhInDTO = new QueryDeviceDesiredHistoryInDTO();
        if (!empty($queryDeviceDesiredHistoryArray['qddhInArray']['appId']))
        {
            $qddesiredhInDTO->appId = $queryDeviceDesiredHistoryArray['qddhInArray']['appId'];
        }
        else
        {
            $qddesiredhInDTO->appId = null;
        }
        if (!empty($queryDeviceDesiredHistoryArray['qddhInArray']['deviceId']))
        {
            $qddesiredhInDTO->deviceId = $queryDeviceDesiredHistoryArray['qddhInArray']['deviceId'];
        }
        if (!empty($queryDeviceDesiredHistoryArray['qddhInArray']['gatewayId']))
        {
            $qddesiredhInDTO->gatewayId = $queryDeviceDesiredHistoryArray['qddhInArray']['gatewayId'];
        }
        if (!empty($queryDeviceDesiredHistoryArray['qddhInArray']['serviceId']))
        {
            $qddesiredhInDTO->serviceId = $queryDeviceDesiredHistoryArray['qddhInArray']['serviceId'];
        }
        if (!empty($queryDeviceDesiredHistoryArray['qddhInArray']['property']))
        {
            $qddesiredhInDTO->property = $queryDeviceDesiredHistoryArray['qddhInArray']['property'];
        }
        if (!empty($queryDeviceDesiredHistoryArray['qddhInArray']['pageNo']))
        {
            $qddesiredhInDTO->pageNo = $queryDeviceDesiredHistoryArray['qddhInArray']['pageNo'];
        }
        if (!empty($queryDeviceDesiredHistoryArray['qddhInArray']['pageSize']))
        {
            $qddesiredhInDTO->pageSize = $queryDeviceDesiredHistoryArray['qddhInArray']['pageSize'];
        }
        if (!empty($queryDeviceDesiredHistoryArray['qddhInArray']['startTime']))
        {
            $qddesiredhInDTO->startTime = $queryDeviceDesiredHistoryArray['qddhInArray']['startTime'];
        }
        if (!empty($queryDeviceDesiredHistoryArray['qddhInArray']['endTime']))
        {
            $qddesiredhInDTO->endTime = $queryDeviceDesiredHistoryArray['qddhInArray']['endTime'];
        }

        try {
            $qddesiredhOutDTO = $dataCollection->queryDeviceDesiredHistory($qddesiredhInDTO, $queryDeviceDesiredHistoryArray['accessToken']);
            return $qddesiredhOutDTO;
        } catch (NorthApiException $e) {
            return $e;
        }
    }
    static function queryDeviceCapabilities(array $queryDeviceCapabilitiesArray){
        $northApiClient = Auth::initApiClient($queryDeviceCapabilitiesArray);
        /**---------------------query device desired capabilities------------------------*/
        $dataCollection = new DataCollection($northApiClient);
        $qdcInDTO = new QueryDeviceCapabilitiesInDTO();

        if (!empty($queryDeviceCapabilitiesArray['qdcInArray']['appId']))
        {
            $qdcInDTO->appId = $queryDeviceCapabilitiesArray['qdcInArray']['appId'];
        }
        else
        {
            $qdcInDTO->appId = null;
        }
        if (!empty($queryDeviceCapabilitiesArray['qdcInArray']['deviceId']))
        {
            $qdcInDTO->deviceId = $queryDeviceCapabilitiesArray['qdcInArray']['deviceId'];
        }
        if (!empty($queryDeviceCapabilitiesArray['qdcInArray']['gatewayId']))
        {
            $qdcInDTO->gatewayId = $queryDeviceCapabilitiesArray['qdcInArray']['gatewayId'];
        }

        try {
            $qdcOutDTO = $dataCollection->queryDeviceCapabilities($qdcInDTO, $queryDeviceCapabilitiesArray['accessToken']);
            return $qdcOutDTO;
        } catch (NorthApiException $e) {
            return $e;
        }
    }

}