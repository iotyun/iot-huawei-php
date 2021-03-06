<?php
/**
 * Created by PhpStorm.
 * User: hWX538513
 * Date: 2018/10/23
 * Time: 17:22
 */

namespace iotyun\huaweiiot\client\dto;


class NotifyDeviceInfoChangedDTO implements \JsonSerializable
{
    private $notifyType;
    private $deviceId;
    private $gatewayId;
    private $deviceInfo;

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
        return "NotifyDeviceInfoChangedDTO [notifyType=" . $this->notifyType . ", deviceId=" . $this->deviceId .
            ", gatewayId=" . $this->gatewayId . ", deviceInfo=" . json_encode($this->deviceInfo) . "]";
    }
}