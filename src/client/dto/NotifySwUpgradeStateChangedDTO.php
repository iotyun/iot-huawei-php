<?php
/**
 * Created by PhpStorm.
 * User: hWX538513
 * Date: 2018/10/23
 * Time: 19:15
 */

namespace iotyun\huaweiiot\client\dto;


class NotifySwUpgradeStateChangedDTO implements \JsonSerializable
{
    private $notifyType;
    private $deviceId;
    private $appId;
    private $operationId;
    private $subOperationId;
    private $swUpgradeState;

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
        return "NotifySwUpgradeStateChangedDTO [notifyType=" . $this->notifyType . ", deviceId=" . $this->deviceId .
            ", appId=" . $this->appId . ", operationId=" . $this->operationId .
            ", subOperationId=" . $this->subOperationId . ", swUpgradeState=" . $this->swUpgradeState . "]";
    }
}