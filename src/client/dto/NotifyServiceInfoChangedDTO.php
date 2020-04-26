<?php
/**
 * Created by PhpStorm.
 * User: hWX538513
 * Date: 2018/10/23
 * Time: 17:35
 */

namespace iotyun\huaweiiot\client\dto;


class NotifyServiceInfoChangedDTO implements \JsonSerializable
{
    private $notifyType;
    private $deviceId;
    private $gatewayId;
    private $serviceId;
    private $serviceType;
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
        return "NotifyServiceInfoChangedDTO [notifyType=" . $this->notifyType . ", deviceId=" . $this->deviceId .
            ", gatewayId=" . $this->gatewayId . ", serviceId=" . $this->serviceId . ", serviceType=" .
            $this->serviceType . ", serviceInfo=" . json_encode($this->serviceInfo) . "]";
    }
}