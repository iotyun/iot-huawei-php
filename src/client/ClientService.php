<?php
/**
 * Created by PhpStorm->
 * User: hWX538513
 * Date: 2018/10/8
 * Time: 10:32
 */

namespace iotyun\huaweiiot\client;

//$dir = dirname(__FILE__);
//$parentDirName = dirname($dir);
//require_once($dir . '\dto\ClientInfo.php');
//require_once($parentDirName . '\constant\ExceptionEnum.php');
use iotyun\huaweiiot\client\dto\ClientInfo;
use iotyun\huaweiiot\constant\ExceptionEnum;

class ClientService{
    public function checkClientInfo($ci) {
        if ($ci === null) {
            return new NorthApiException(new ExceptionEnum(ExceptionEnum::CLIENT_INFO_ERROR));
        }

        if (($ci->platformIp === null) || ("" === ($ci->platformIp))) {
            return new NorthApiException(new ExceptionEnum(ExceptionEnum::CLIENT_INFO_ERROR));
        }

        if (($ci->platformPort === null) || ("" === ($ci->platformPort))) {
            return new NorthApiException(new ExceptionEnum(ExceptionEnum::CLIENT_INFO_ERROR));
        }

        if (($ci->appId === null) || ("" === ($ci->appId))) {
            return new NorthApiException(new ExceptionEnum(ExceptionEnum::CLIENT_INFO_ERROR));
        }

        if ((strstr($ci->appId," ")) !== false || (strstr($ci->secret," ")) !== false) {
            return new NorthApiException(new ExceptionEnum(ExceptionEnum::APPID_SECRET_INCLUDE_SPACE));
        }

        if (($ci->secret === null) || ("" === ($ci->secret)))
        return new NorthApiException(new ExceptionEnum(ExceptionEnum::CLIENT_INFO_ERROR));

    }

    public function checkAccessToken($accessToken){
        if (($accessToken === null) || ("" === $accessToken))
        return new NorthApiException(new ExceptionEnum(ExceptionEnum::CLIENT_INPUT_ACCESSTOKEN_INVALID));
    }

    public function checkInput($input){
        if ($input === null) {
            return new NorthApiException(new ExceptionEnum(ExceptionEnum::CLIENT_INPUT_PARAMETER_INVALID));
        }

        if ((is_string($input)) && ("" === ($input)))
            return new NorthApiException(new ExceptionEnum(ExceptionEnum::CLIENT_INPUT_PARAMETER_INVALID));
        }

    public function putInIfValueNotEmpty(&$queryParams, $key, $value){
        if ($value !== null){
            $keys = array($key);
            $a = array_fill_keys($keys , $value);
            $queryParams = array_merge($queryParams , $a);
        }
    }

}