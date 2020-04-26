<?php
/**
 * Created by PhpStorm.
 * User: hWX538513
 * Date: 2018/10/25
 * Time: 22:04
 */

namespace iotyun\huaweiiot\client\dto;


class ServiceCapabilityDTO implements \JsonSerializable, \arrayaccess
{
    private $serviceId;
    private $serviceType;
    private $option;
    private $description;
    private $commands;
    private $properties;

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

    public function offsetSet($offset, $value) {
        var_dump(__METHOD__);
    }

    public function offsetExists($var) {
        var_dump(__METHOD__);
        if ($var == "foobar") {
            return true;
        }
        return false;
    }

    public function offsetUnset($var) {
        var_dump(__METHOD__);
    }

    public function offsetGet($var) {
        var_dump(__METHOD__);
        return "value";
    }


    public function __toString() {
        return "ServiceCapabilityDTO [serviceId=" . $this->serviceId .", serviceType=" . $this->serviceType .
            ", option=" . $this->option . ", description=" . $this->description . ", commands=" .
            json_encode($this->commands) . ", properties=" . json_encode($this->properties) . "]";
    }
}