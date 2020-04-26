<?php
/**
 * Created by PhpStorm.
 * User: hWX538513
 * Date: 2018/10/17
 * Time: 20:13
 */

namespace iotyun\huaweiiot\client\dto;


class RefreshDeviceKeyOutDTO
{
    private $verifyCode;
    private $timeout;

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
        return "RefreshDeviceKeyOutDTO [verifyCode=" . $this->verifyCode . ", timeout=" . $this->timeout . "]";
    }
}