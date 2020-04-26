<?php
/**
 * Created by PhpStorm.
 * User: hWX538513
 * Date: 2018/12/6
 * Time: 15:07
 */

namespace iotyun\huaweiiot\client\dto;


class CustomField implements \JsonSerializable
{
    private $fieldName;
    private $fieldType;
    private $fieldValue;

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
        return "CustomField [fieldName=" . $this->fieldName . ", fieldType=" .$this->fieldType
            . ", fieldValue=" . $this->fieldValue. "]";
    }
}