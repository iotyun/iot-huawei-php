<?php
/**
 * Created by PhpStorm.
 * User: hWX538513
 * Date: 2018/10/8
 * Time: 15:12
 */

namespace iotyun\huaweiiot\constant;


class ExceptionEnum{
    const CLIENT_INTERNAL_ERROR = array("1001" =>"Client internal error");
    const CLIENT_INVALID_METHOD = array("1002"=>"The http method is invalid");
    const CLIENT_BEFORE_INVOK_ERROR = array("1003"=>"Process data error before invoke API");
    const CLIENT_AFTER_INVOK_ERROR = array("1004"=>"Precess data error after invoke API");
    const CLIENT_ERROR_BUT_NO_ERRORCODE = array("1005" => "Invoke API error but no error_code and error_desc, please refer to httpMessage");
    const CLIENT_SSL_CONFIG_ERROR = array("1006" => "Ssl config error, please check the certificate path");
    const CLIENT_INPUT_PARAMETER_INVALID = array("1007" => "The input parameter of the method is invalid");
    const CLIENT_INFO_ERROR = array("1008" => "Error in clientInfo, Please check whether clientInfo is configured on the client");
    const CLIENT_INPUT_ACCESSTOKEN_INVALID = array("1009" => "The input accessToken of the method cannot be null or empty");
    const APPID_SECRET_INCLUDE_SPACE = array("1010" => "AppId or secret include some spaces, please remove them");
    const PORT_ERROR = array("1011" => "The input port is not right, please check it");

    const CLIENT_EXC_END = array("1000" => "");

    private $errorCode;
    private $errorDesc;

    function __construct(array $a){
        $this->errorCode = array_keys($a)['0'];
        $this->errorDesc = array_values($a)['0'];
    }

    public function __set($name, $value){
        $this->$name = $value;
    }

    public function __get($name){
        return isset($this->$name) ? $this->$name : null;
    }

    public function __toString(){
        return $this->errorCode . "-" . $this->errorDesc;
    }
}