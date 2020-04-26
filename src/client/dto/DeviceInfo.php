<?php
/**
 * Created by PhpStorm.
 * User: hWX538513
 * Date: 2018/10/17
 * Time: 19:52
 */

namespace iotyun\huaweiiot\client\dto;


class DeviceInfo
{
    private $manufacturerId;
    private $manufacturerName;
    private $deviceType;
    private $model;
    private $protocolType;

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
        return "DeviceInfo [manufacturerId=" . $this->manufacturerId . ", manufacturerName=" . $this->manufacturerName
           . ", deviceType=" . $this->deviceType . ", model=" . $this->model . ", protocolType=" . $this->protocolType
           . "]";
    }

}