<?php
/**
 * Created by PhpStorm.
 * User: hWX538513
 * Date: 2018/10/23
 * Time: 17:12
 */

namespace iotyun\huaweiiot\client\dto;


class NotifyNBCommandStatusChangedDTO implements \JsonSerializable
{
    private $deviceId;
    private $commandId;
    private $result;

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
        return "NotifyNBCommandResultDTO [deviceId=" . $this->deviceId .
            ", commandId=" . $this->commandId . ", result=" . json_encode($this->result) . "]";
    }
}