<?php
/**
 * Created by PhpStorm.
 * User: hWX538513
 * Date: 2018/10/12
 * Time: 17:53
 */

namespace iotyun\huaweiiot\client;


class DefaultNorthApiClient
{
    private static $defaultNorthApiClient;

    public static function getDefaultApiClient(){
        if (DefaultNorthApiClient::$defaultNorthApiClient === null){
            DefaultNorthApiClient::$defaultNorthApiClient = new NorthApiClient();
        }
        return DefaultNorthApiClient::$defaultNorthApiClient;
    }

    public static function setDefaultApiClient($northApiClient){
        DefaultNorthApiClient::$defaultNorthApiClient = $northApiClient;
    }

}