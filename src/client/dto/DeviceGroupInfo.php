<?php
/**
 * Created by PhpStorm.
 * User: hWX538513
 * Date: 2018/11/5
 * Time: 17:04
 */

namespace iotyun\huaweiiot\client\dto;


class DeviceGroupInfo implements \JsonSerializable
{
    private $groupId;
    private $path;

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
        return "DeviceGroupInfo [groupId=" . $this->groupId . ", path=" . $this->path . "]";
    }
}