<?php
/**
 * Created by PhpStorm.
 * User: hWX538513
 * Date: 2018/10/19
 * Time: 11:06
 */

namespace iotyun\huaweiiot\client\dto;


class RuleResponseBodyDTO implements \JsonSerializable
{
    private $ruleId;
    private $response;

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
        return "RuleResponseBodyDTO [ruleId=" . $this->ruleId .
            ', response=' . json_encode($this->response) . "]";
    }
}