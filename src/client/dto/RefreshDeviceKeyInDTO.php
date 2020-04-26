<?php
/**
 * Created by PhpStorm.
 * User: hWX538513
 * Date: 2018/10/17
 * Time: 20:01
 */

namespace iotyun\huaweiiot\client\dto;


class RefreshDeviceKeyInDTO  implements \JsonSerializable
{
    private $verifyCode;
    private $nodeId;
    private $timeout;

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
        return "RefreshDeviceKeyInDTO [verifyCode=" . $this->verifyCode . ", nodeId=" . $this->nodeId
            . ", timeout=" . $this->timeout . "]";
    }
}