<?php
/**
 * Created by PhpStorm.
 * User: hWX538513
 * Date: 2018/10/15
 * Time: 16:01
 */

namespace iotyun\huaweiiot\client\dto;


class RegDirectDeviceInDTO implements \JsonSerializable
{
    private $deviceInfo;
    private $endUserId;
    private $imsi;
    private $isSecure;
    private $nodeId;
    private $psk;
    private $timeout;
    private $verifyCode;
    private $productId;

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
        return "RegDirectDeviceInDTO [deviceInfo=" . json_encode($this->deviceInfo) .", endUserId=" . $this->endUserId.
            ", imsi=" . $this->imsi . ", isSecure=" . $this->isSecure . ", nodeId=" . $this->nodeId . ", psk=" .
            $this->psk .", timeout=" . $this->timeout . ", verifyCode=" . $this->verifyCode . ", productId=" .
            $this->productId . "]";
    }

}