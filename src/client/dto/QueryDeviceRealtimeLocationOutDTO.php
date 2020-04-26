<?php
/**
 * Created by PhpStorm.
 * User: hWX538513
 * Date: 2018/10/17
 * Time: 15:11
 */

namespace iotyun\huaweiiot\client\dto;


class QueryDeviceRealtimeLocationOutDTO
{
    private $deviceId;
    private $pd;
    private $poserr;

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

    public function __toString(){
        return "QueryDeviceRealtimeLocationOutDTO [deviceId=" . $this->deviceId . ", pd=" .
            json_encode($this->pd) . ", poserr=" . json_encode($this->poserr)  ."]";
    }
}