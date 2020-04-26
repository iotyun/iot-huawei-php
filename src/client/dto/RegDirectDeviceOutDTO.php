<?php
/**
 * Created by PhpStorm.
 * User: hWX538513
 * Date: 2018/10/15
 * Time: 16:07
 */

namespace iotyun\huaweiiot\client\dto;


class RegDirectDeviceOutDTO
{
    private $deviceId;
    private $verifyCode;
    private $timeout;
    private $psk;

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
        return "RegDirectDeviceInDTO2 [deviceId=" . $this->deviceId . ", verifyCode=" .
            $this->verifyCode  . ", timeout=" . $this->timeout . ", psk=" . $this->psk. "]";
    }



}