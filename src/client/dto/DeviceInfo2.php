<?php
/**
 * Created by PhpStorm.
 * User: hWX538513
 * Date: 2018/12/6
 * Time: 15:32
 */

namespace iotyun\huaweiiot\client\dto;


class DeviceInfo2
{
    private $region;
    private $timezone;
    private $activeServiceCount;

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
        return "DeviceInfo2 [region=" . $this->region . ", timezone=" . $this->timezone .
            ", activeServiceCount=" . $this->activeServiceCount . "]";
    }

}