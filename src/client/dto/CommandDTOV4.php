<?php
/**
 * Created by PhpStorm.
 * User: hWX538513
 * Date: 2018/10/18
 * Time: 10:37
 */

namespace iotyun\huaweiiot\client\dto;


class CommandDTOV4 implements \JsonSerializable
{
    private $serviceId;
    private $method;
    private $paras;

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

    public function __toString(){
        return "CommandDTOV4 [serviceId=" . $this->serviceId . ", method=" . $this->method .
            ", paras=" . json_encode($this->paras) . "]";
    }
}