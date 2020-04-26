<?php
/**
 * Created by PhpStorm.
 * User: hWX538513
 * Date: 2018/12/14
 * Time: 10:22
 */

namespace iotyun\huaweiiot\client\dto;


class DataConfigDTO implements \JsonSerializable
{
    private $dataAgingTime;

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
        return "DataConfigDTO [dataAgingTime=" . $this->dataAgingTime . "]";
    }
}