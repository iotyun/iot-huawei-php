<?php
/**
 * Created by PhpStorm.
 * User: hWX538513
 * Date: 2018/10/13
 * Time: 9:36
 */

namespace iotyun\huaweiiot\client\dto;


class AuthRefreshOutDTO
{
private $accessToken;
    private $tokenType;
    private $expiresIn;
    private $scope;
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
        return "AuthRefreshOutDTO [accessToken=" . $this->accessToken . ", tokenType=" .
            $this->tokenType . ", expiresIn=" . $this->expiresIn . ", scope=" . $this->scope .
            ", refreshToken=" . $this->refreshToken ."]";
    }
}