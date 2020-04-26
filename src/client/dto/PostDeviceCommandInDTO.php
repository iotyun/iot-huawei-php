<?php
/**
 * Created by PhpStorm.
 * User: hWX538513
 * Date: 2018/10/25
 * Time: 10:09
 */

namespace iotyun\huaweiiot\client\dto;


class PostDeviceCommandInDTO  implements \JsonSerializable
{
    private $deviceId;
    private $command;
    private $callbackUrl;
    private $expireTime;
    private $maxRetransmit;

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
        return "PostDeviceCommandInDTO [deviceId=" . $this->deviceId . ", command=" .
            json_encode($this->command) . ", callbackUrl=" . $this->callbackUrl . ", expireTime=" .
            $this->expireTime . ", maxRetransmit=" . $this->maxRetransmit . "]";
    }
}