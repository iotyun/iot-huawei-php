<?php
/**
 * Created by PhpStorm.
 * User: hWX538513
 * Date: 2018/11/5
 * Time: 17:32
 */

namespace iotyun\huaweiiot\client\dto;


class ActionDelay implements \JsonSerializable
{
    private $type;
    private $id;
    private $time;
    private $transInfo;

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
        return "ActionDelay [type=" . $this->type . ", id=" . $this->id . ", time=" . $this->time .
            ", transInfo=" . json_encode($this->transInfo) . "]";
    }
}