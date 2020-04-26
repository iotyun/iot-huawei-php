<?php
/**
 * Created by PhpStorm.
 * User: hWX538513
 * Date: 2018/10/18
 * Time: 17:28
 */

namespace iotyun\huaweiiot\client\dto;


class ActionDeviceCMD implements \JsonSerializable
{
    private $type;
    private $id;
    private $appKey;
    private $deviceId;
    private $cmd;
    private $cmdVersion;
    private $cmdMetaData;
    private $transInfo;
    private $deviceCommandActionPreProcessors;


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
        return "ActionDeviceCMD [type=" . $this->type . ", id=" . $this->id . ", appKey=" . $this->appKey .
            ", deviceId=" . $this->deviceId . ", cmd=" . json_encode($this->cmd) .
            ", cmdVersion=" . $this->cmdVersion . ", cmdMetaData=" . json_encode($this->cmdMetaData) .
            ", transInfo=" . json_encode($this->transInfo) .
            ", deviceCommandActionPreProcessors=" . json_encode($this->deviceCommandActionPreProcessors) . "]";
    }
}