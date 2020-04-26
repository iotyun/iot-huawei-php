<?php
/**
 * Created by PhpStorm.
 * User: hWX538513
 * Date: 2018/10/23
 * Time: 17:50
 */

namespace iotyun\huaweiiot\client\dto;


class DeviceEventHeader implements \JsonSerializable
{
    private $eventType;
    private $from;
    private $timestamp;
    private $eventTime;
    private $deviceId;
    private $serviceType;

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

    public function jsonSerialize() {
        $data = [];
        foreach ($this as $key=>$val){
            if ($val !== null) $data[$key] = $val;
        }
        return $data;
    }

    public function __toString() {
        return "DeviceEventHeader [eventType=" . $this->eventType . ", from=" . $this->from .
            ", timestamp=" . $this->timestamp . ", eventTime=" . $this->eventTime .
            ", deviceId=" . $this->deviceId . ", serviceType=" . $this->serviceType . "]";
    }
}