<?php
/**
 * Created by PhpStorm.
 * User: hWX538513
 * Date: 2018/10/26
 * Time: 9:14
 */

namespace iotyun\huaweiiot\client\dto;


class ServiceProperty implements  \JsonSerializable, \arrayaccess
{
    private $propertyName;
    private $dataType;
    private $required;
    private $min;
    private $max;
    private $step;
    private $maxLength;
    private $method;
    private $unit;
    private $enumList;

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
        return "ServiceProperty [propertyName=" . $this->propertyName . ", dataType=" .$this->dataType .
            ", required=" . $this->required . ", min=" . $this->min .", max=" . $this->max .
            ", step=" . $this->step . ", maxLength=" .$this->maxLength . ", method=" . $this->method
            . ", unit=" . $this->unit .", enumList=" . json_encode($this->enumList) . "]";
    }
}