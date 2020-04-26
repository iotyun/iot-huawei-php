<?php
/**
 * Created by PhpStorm.
 * User: hWX538513
 * Date: 2018/10/17
 * Time: 19:39
 */

namespace iotyun\huaweiiot\client\dto;


class QueryDeviceShadowOutDTO
{
    private $deviceId;
    private $gatewayId;
    private $nodeType;
    private $createTime;
    private $lastModifiedTime;
    private $deviceInfo;
    private $services;

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
        return "QueryDeviceShadowOutDTO [deviceId=" . $this->deviceId . ", gatewayId=" . $this->gatewayId
            . ", nodeType=" . $this->nodeType . ", createTime=" . $this->createTime
            . ", lastModifiedTime=" . $this->lastModifiedTime. ", deviceInfo=" . json_encode($this->deviceInfo)
            . ", services=" . json_encode($this->services) . "]";
    }
}