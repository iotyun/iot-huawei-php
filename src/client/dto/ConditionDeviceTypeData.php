<?php
/**
 * Created by PhpStorm.
 * User: hWX538513
 * Date: 2018/11/5
 * Time: 17:10
 */

namespace iotyun\huaweiiot\client\dto;


class ConditionDeviceTypeData implements \JsonSerializable
{
    private $type;
    private $id;
    private $deviceInfo;
    private $operator;
    private $value;
    private $transInfo;
    private $duration;
    private $strategy;

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
        return "ConditionDeviceTypeData [type=" . $this->type . ", id=" . $this->id . ", deviceInfo=" .
            json_encode($this->deviceInfo) . ", operator=" . $this->operator . ", value=" . $this->value .
            ", transInfo=" . json_encode($this->transInfo) . ", duration=" . $this->duration .
            ", strategy" . json_encode($this->strategy) . "]";
    }
}