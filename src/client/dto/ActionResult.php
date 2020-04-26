<?php
/**
 * Created by PhpStorm.
 * User: hWX538513
 * Date: 2018/10/23
 * Time: 18:01
 */

namespace iotyun\huaweiiot\client\dto;


class ActionResult implements \JsonSerializable
{
    private $type;
    private $id;
    private $exception;
    private $result;
    private $info;
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
        return "ActionResult [type=" . $this->type . ", id=" . $this->id .
            ", exception=" . $this->exception . ", result=" . json_encode($this->result) .
            ", info=" . json_encode($this->info) . ", transInfo=" . json_encode($this->transInfo) . "]";
    }
}