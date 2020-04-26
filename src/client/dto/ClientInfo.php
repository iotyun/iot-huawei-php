<?php
/**
 * Created by PhpStorm.
 * User: hWX538513
 * Date: 2018/10/8
 * Time: 16:39
 */

namespace iotyun\huaweiiot\client\dto;

class ClientInfo{
    private $platformIp;
    private $platformPort;
    private $appId;
    private $secret;

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
        return "ClientInfo [platformIp=" . $this->platformIp . ", platformPort=" . 
            $this->platformPort . ", appId=" . $this->appId . ", secret=" . $this->secret .
            "]";
    }
}