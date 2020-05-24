<?php

namespace iotyun\huaweiiot;

use iotyun\huaweiiot\Auth;
use iotyun\huaweiiot\client\dto\QueryBatchDevicesInfoInDTO;
use iotyun\huaweiiot\client\invokeapi\DataCollection;
use iotyun\huaweiiot\client\NorthApiException;

class DataCollections
{
    
    static function queryBatchDevicesInfo(array $queryBatchDevicesInfoArray){
        $northApiClient = Auth::initApiClient($queryBatchDevicesInfoArray);
        /**---------------------query batch device info------------------------*/
        $dataCollection = new DataCollection($northApiClient);

        $qbdiInDTO = new QueryBatchDevicesInfoInDTO();
        $qbdiInDTO->pageNo = 0;
        $qbdiInDTO->pageSize = 10;
        
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