<?php
/**
 * Created by PhpStorm.
 * User: hWX538513
 * Date: 2018/10/23
 * Time: 19:17
 */

namespace iotyun\huaweiiot\client\dto;


class NotifySwUpgradeResultDTO implements \JsonSerializable
{
    private $notifyType;
    private $deviceId;
    private $appId;
    private $operationId;
    private $subOperationId;
    private $curVersion;
    private $targetVersion;
    private $sourceVersion;
    private $swUpgradeResult;
    private $upgradeTime;
    private $resultDesc;
    private $errorCode;
    private $description;

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
        return "NotifySwUpgradeResultDTO [notifyType=" . $this->notifyType . ", deviceId=" . $this->deviceId .
            ", appId=" . $this->appId . ", operationId=" . $this->operationId .
            ", subOperationId=" . $this->subOperationId . ", curVersion=" . $this->curVersion .
            ", targetVersion=" . $this->targetVersion . ", sourceVersion=" . $this->sourceVersion .
            ", swUpgradeResult=" . $this->swUpgradeResult . ", upgradeTime=" . $this->upgradeTime .
            ", resultDesc=" . $this->resultDesc . ", errorCode=" . $this->errorCode .
            ", description=" . $this->description . "]";
    }
}