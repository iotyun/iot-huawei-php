<?php
/**
 * Created by PhpStorm.
 * User: hWX538513
 * Date: 2018/10/23
 * Time: 17:31
 */

namespace iotyun\huaweiiot\client\dto;


class NotifyDeviceDatasChangedDTO implements \JsonSerializable
{
    private $notifyType;
    private $requestId;
    private $deviceId;
    private $gatewayId;
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

    public function jsonSerialize() {
        $data = [];
        foreach ($this as $key=>$val){
            if ($val !== null) $data[$key] = $val;
        }
        return $data;
    }

    public function __toString() {
        return "NotifyDeviceDatasChangedDTO [notifyType=" . $this->notifyType . ", requestId=" .
            $this->requestId . ", deviceId=" . $this->deviceId . ", gatewayId=" . $this->gatewayId .
            ", services=" . json_encode($this->services) . "]";
    }
}