<?php
/**
 * Created by PhpStorm.
 * User: hWX538513
 * Date: 2018/10/19
 * Time: 11:00
 */

namespace iotyun\huaweiiot\client\dto;


class UpdateBatchRuleStatusOutDTO implements \JsonSerializable
{
    private $result;
    private $responses;

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
        return "UpdateBatchRuleStatusOutDTO [result=" . json_encode($this->result) .
            ', responses=' . json_encode($this->responses) . "]";
    }
}