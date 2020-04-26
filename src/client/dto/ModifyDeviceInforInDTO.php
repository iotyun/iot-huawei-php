<?php
/**
 * Created by PhpStorm.
 * User: hWX538513
 * Date: 2018/10/17
 * Time: 9:15
 */

namespace iotyun\huaweiiot\client\dto;


class ModifyDeviceInforInDTO implements \JsonSerializable
{
    private $customFields;
    private $name;
    private $endUser;
    private $mute;
    private $manufacturerId;
    private $manufacturerName;
    private $deviceType;
    private $model;
    private $location;
    private $protocolType;
    private $region;
    private $organization;
    private $timezone;
    private $imsi;
    private $ip;
    private $isSecure;
    private $deviceConfig;
    private $psk;
    private $tags;

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

    public function toString(){
        return "ModifyDeviceInforInDTO [customFields=" . json_encode($this->customFields) . ", name=" . $this->name .
            ", endUser=" . $this->endUser . ", mute=" . $this->mute .
            ", manufacturerId=" . $this->manufacturerId . ", manufacturerName=" .
            $this->manufacturerName . ", deviceType=" . $this->deviceType . ", model=" .
            $this->model . ", location=" . $this->location . ", protocolType=" .
            $this->protocolType . ", region=" . $this->region . ", organization=" . $this->organization .
            ", timezone=" . $this->timezone . ", imsi=" . $this->imsi . ", ip=" . $this->ip .
            ", isSecure=". $this->isSecure . ", deviceConfig=" . json_encode($this->deviceConfig) .
            ", psk=" . $this->psk . ", tags=" . json_encode($this->tags) . "]";
    }
}