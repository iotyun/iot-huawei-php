<?php
/**
 * Created by PhpStorm.
 * User: hWX538513
 * Date: 2018/10/17
 * Time: 10:17
 */

namespace iotyun\huaweiiot\client\dto;


class QueryDeviceStatusOutDTO
{
    private $deviceId;
    private $activated;
    private $name;

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
        return "QueryDeviceStatusOutDTO [deviceId=" . $this->deviceId . ", activated=" .
            $this->activated  . ", name=" . $this->name . "]";
    }
}