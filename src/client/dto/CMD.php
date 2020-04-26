<?php
/**
 * Created by PhpStorm.
 * User: hWX538513
 * Date: 2018/10/18
 * Time: 17:33
 */

namespace iotyun\huaweiiot\client\dto;


class CMD implements \JsonSerializable
{
    private $messageType;
    private $messageBody;
    private $serviceId;

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
        return "CMD [messageType=" . $this->messageType .
            ", messageBody=" . json_encode($this->messageBody) .
            ", serviceId=" . $this->serviceId . "]";
    }
}