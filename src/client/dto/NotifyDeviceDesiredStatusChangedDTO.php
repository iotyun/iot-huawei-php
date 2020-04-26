<?php
/**
 * Created by PhpStorm.
 * User: hWX538513
 * Date: 2018/10/23
 * Time: 18:03
 */

namespace iotyun\huaweiiot\client\dto;


class NotifyDeviceDesiredStatusChangedDTO implements \JsonSerializable
{
    private $notifyType;
    private $deviceId;
    private $serviceId;
    private $properties;
    private $status;

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
        return "NotifyDeviceDesiredStatusChangedDTO [notifyType=" . $this->notifyType .
            ", deviceId=" . $this->deviceId . ", serviceId=" . $this->serviceId .
            ", properties=" . json_encode($this->properties) .", status=" . $this->status . "]";
    }
}