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