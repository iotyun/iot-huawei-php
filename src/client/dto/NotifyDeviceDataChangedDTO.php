<?php
/**
 * Created by PhpStorm.
 * User: hWX538513
 * Date: 2018/10/23
 * Time: 17:24
 */

namespace iotyun\huaweiiot\client\dto;


class NotifyDeviceDataChangedDTO implements \JsonSerializable
{
    private $notifyType;
    private $requestId;
    private $deviceId;
    private $gatewayId;
    private $service;

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
        return "NotifyDeviceDataChangedDTO [notifyType=" . $this->notifyType . ", requestId=" .
            $this->requestId . ", deviceId=" . $this->deviceId . ", gatewayId=" . $this->gatewayId .
            ", service=" . json_encode($this->service) . "]";
    }
}