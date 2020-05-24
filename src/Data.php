<?php

namespace iotyun\huaweiiot;

use iotyun\huaweiiot\Auth;
use iotyun\huaweiiot\client\dto\QueryBatchDevicesInfoInDTO;
use iotyun\huaweiiot\client\invokeapi\DataCollection;
use iotyun\huaweiiot\client\NorthApiException;

class Data
{
    
    static function queryBatchDevicesInfo(array $queryBatchDevicesInfoArray){
        $northApiClient = Auth::initApiClient($queryBatchDevicesInfoArray);
        /**---------------------query batch device info------------------------*/
        $dataCollection = new DataCollection($northApiClient);

        $qbdiInDTO = new QueryBatchDevicesInfoInDTO();
        if (empty($queryBatchDevicesInfoArray['pageNo']))
        {
            $queryBatchDevicesInfoArray['pageNo'] = 0;
        }
        $qbdiInDTO->pageNo = $queryBatchDevicesInfoArray['pageNo'];
        if (empty($queryBatchDevicesInfoArray['pageSize']))
        {
            $queryBatchDevicesInfoArray['pageSize'] = 25;
        }
        $qbdiInDTO->pageSize = $queryBatchDevicesInfoArray['pageSize'];
        if (!empty($queryBatchDevicesInfoArray['appId']))
        {
            $qbdiInDTO->appId = $queryBatchDevicesInfoArray['appId'];
        }

        if (!empty($queryBatchDevicesInfoArray['gatewayId']))
        {
            $qbdiInDTO->gatewayId = $queryBatchDevicesInfoArray['gatewayId'];
        }
        if (!empty($queryBatchDevicesInfoArray['nodeType']))
        {
            $qbdiInDTO->nodeType = $queryBatchDevicesInfoArray['nodeType'];
        }
        if (!empty($queryBatchDevicesInfoArray['deviceType']))
        {
            $qbdiInDTO->deviceType = $queryBatchDevicesInfoArray['deviceType'];
        }
        if (!empty($queryBatchDevicesInfoArray['location']))
        {
            $qbdiInDTO->location = $queryBatchDevicesInfoArray['location'];
        }
        if (!empty($queryBatchDevicesInfoArray['name']))
        {
            $qbdiInDTO->name = $queryBatchDevicesInfoArray['name'];
        }
        if (!empty($queryBatchDevicesInfoArray['status']))
        {
            $qbdiInDTO->status = $queryBatchDevicesInfoArray['status'];
        }
        if (!empty($queryBatchDevicesInfoArray['startTime']))
        {
            $qbdiInDTO->startTime = $queryBatchDevicesInfoArray['startTime'];
        }
        if (!empty($queryBatchDevicesInfoArray['endTime']))
        {
            $qbdiInDTO->endTime = $queryBatchDevicesInfoArray['endTime'];
        }
        if (!empty($queryBatchDevicesInfoArray['sort']))
        {
            $qbdiInDTO->sort = $queryBatchDevicesInfoArray['sort'];
        }
        if (!empty($queryBatchDevicesInfoArray['select']))
        {
            $qbdiInDTO->select = $queryBatchDevicesInfoArray['select'];
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
}