<?php
/**
 * Created by PhpStorm.
 * User: hWX538513
 * Date: 2018/10/23
 * Time: 17:26
 */

namespace iotyun\huaweiiot\client\dto;


class DeviceService implements \JsonSerializable
{
    private $serviceId;
    private $serviceType;
    private $data;
    private $eventTime;
    private $serviceInfo;

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
        return "DeviceService [serviceId=" . $this->serviceId . ", serviceType=" .
            $this->serviceType . ", data=" . json_encode($this->data) . ", eventTime=" . $this->eventTime .
            ", serviceInfo=" . json_encode($this->serviceInfo) . "]";
    }
}