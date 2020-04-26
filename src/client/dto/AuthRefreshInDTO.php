<?php
/**
 * Created by PhpStorm.
 * User: hWX538513
 * Date: 2018/10/13
 * Time: 9:11
 */

namespace iotyun\huaweiiot\client\dto;


class AuthRefreshInDTO
{
    private $appId;
    private $secret;
    private $refreshToken;

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

    public function __toString(){
        return "AuthRefreshInDTO [appId=" . $this->appId . ", secret=" .
            $this->secret . ", refreshToken=" . $this->refreshToken . "]";
    }
}