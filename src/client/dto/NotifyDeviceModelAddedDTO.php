<?php
/**
 * Created by PhpStorm.
 * User: hWX538513
 * Date: 2018/10/23
 * Time: 17:52
 */

namespace iotyun\huaweiiot\client\dto;


class NotifyDeviceModelAddedDTO implements \JsonSerializable
{
    private $notifyType;
    private $appId;
    private $deviceType;
    private $manufacturerName;
    private $manufacturerId;
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

    public function jsonSerialize() {
        $data = [];
        foreach ($this as $key=>$val){
            if ($val !== null) $data[$key] = $val;
        }
        return $data;
    }

    public function __toString() {
        return "NotifyDeviceModelAddedDTO [notifyType=" . $this->notifyType . ", appId=" . $this->appId .
            ", deviceType=" . $this->deviceType . ", manufacturerName=" . $this->manufacturerName .
            ", manufacturerId=" . $this->manufacturerId . ", model=" . $this->model .
            ", protocolType=" . $this->protocolType . "]";
    }
}