<?php
/**
 * Created by PhpStorm.
 * User: hWX538513
 * Date: 2018/10/18
 * Time: 10:36
 */

namespace iotyun\huaweiiot\client\dto;


class DeviceCmd implements \JsonSerializable{
    private $type;
    private $deviceList;
    private $deviceType;
    private $manufacturerId;
    private $model;
    private $deviceLocation;
    private $groupList;
    private $command;
    private $callbackUrl;
    private $maxRetransmit;
    private $groupTag;
    private $fileId;

    public function __set($name, $value) {
        if (property_exists($this,$name)){
            $this->$name = $value;
        }
    }

    public function __get($name) {
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
        return "DeviceCmd [type=" . $this->type . ", deviceList=" . json_encode($this->deviceList) .
            ", deviceType=" . $this->deviceType . ", manufacturerId=" . $this->manufacturerId .
            ", model=" . $this->model . ", deviceLocation=" .$this->deviceLocation .
            ", groupList=" . json_encode($this->groupList) . ", command=" . json_encode($this->command) .
            ", callbackUrl=" . $this->callbackUrl . ", maxRetransmit=" .$this->maxRetransmit .
            ", groupTag=" . $this->groupTag . ", fileId=" .$this->fileId. "]";
    }

}