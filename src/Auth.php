<?php

namespace iotyun\huaweiiot;

use iotyun\huaweiiot\client\dto\ClientInfo;
use iotyun\huaweiiot\client\NorthApiClient;
use iotyun\huaweiiot\client\NorthApiException;
use iotyun\huaweiiot\client\dto\AuthRefreshInDTO;
use iotyun\huaweiiot\client\invokeapi\Authentication;
class Auth
{
    private static $northApiClient = null;
    public static function initApiClient(array $Authorization) {
        if (self::$northApiClient !== null) {
            return self::$northApiClient;
        }
        self::$northApiClient = new NorthApiClient();

        $clientInfo = new ClientInfo();
        $clientInfo->platformIp = $Authorization['platformIp'];
        $clientInfo->platformPort = $Authorization['platformPort'];
        $clientInfo->appId =  $Authorization['appId'];
        $clientInfo->secret = $Authorization['secret'];

        try {
            self::$northApiClient->clientInfo = $clientInfo;
            self::$northApiClient->initSSLConfig();
        } catch (NorthApiException $nae) {
            return $nae;
        }

		return self::$northApiClient;
    }

    public static function login(array $Authorization){
        /**---------------------initialize northApiClient------------------------*/
        $northApiClient = self::initApiClient($Authorization);
        $northApiClient->getVersion();

        /**----------------------get access token-------------------------------*/

        $authentication = new Authentication($northApiClient);
        // get access token
        $authOutDTO = $authentication->getAuthToken();
        return $authOutDTO;
    }

    public static function refreshToken(array $app_key){

        /**---------------------initialize northApiClient------------------------*/
        $northApiClient = self::initApiClient($app_key);
        $northApiClient->getVersion();
        $authentication = new Authentication($northApiClient);
        /**----------------------refresh token--------------------------------*/

        $authRefreshInDTO = new AuthRefreshInDTO();
        $authRefreshInDTO->appId = $app_key['appId'];
        $authRefreshInDTO->secret = $app_key['secret'];
        
        $authRefreshInDTO->refreshToken = $app_key['refreshToken'];
        try{
            $authRefreshOutDTO = $authentication->refreshAuthToken($authRefreshInDTO);
            return $authRefreshOutDTO;
        }catch (\iotyun\huaweiiot\client\NorthApiException $e){
            return $e;
        }
    }

}