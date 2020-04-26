<?php
/**
 * Created by PhpStorm.
 * User: hWX538513
 * Date: 2018/10/23
 * Time: 17:16
 */

namespace iotyun\huaweiiot\client\dto;


class NBCommandResult implements \JsonSerializable
{
    private $resultCode;
    private $resultDetail;

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
        return "NBCommandResult [resultCode=" . $this->resultCode .
            ", resultDetail=" . json_encode($this->resultDetail) . "]";
    }
}