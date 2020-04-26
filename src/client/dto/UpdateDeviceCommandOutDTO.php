<?php
/**
 * Created by PhpStorm.
 * User: hWX538513
 * Date: 2018/10/25
 * Time: 11:17
 */

namespace iotyun\huaweiiot\client\dto;


class UpdateDeviceCommandOutDTO implements \JsonSerializable
{
    private $commandId;
    private $appId;
    private $deviceId;
    private $command;
    private $callbackUrl;
    private $expireTime;
    private $status;
    private $result;
    private $creationTime;
    private $executeTime;
    private $platformIssuedTime;
    private $deliveredTime;
    private $issuedTimes;
    private $maxRetransmit;

    public function __set($name, $value)
    {
        if (property_exists($this, $name)) {
            $this->$name = $value;
        }
    }

    public function __get($name)
    {
        if (property_exists($this, $name)) {
            return isset($this->$name) ? $this->$name : null;
        }
    }

    public function jsonSerialize()
    {
        $data = [];
        foreach ($this as $key => $val) {
            if ($val !== null) $data[$key] = $val;
        }
        return $data;
    }

    public function __toString() {
        return "UpdateDeviceCommandOutDTO [commandId=" . $this->commandId .
            ", appId=" . $this->appId . ", deviceId=" . $this->deviceId .
            ", command=" . json_encode($this->command) . ", callbackUrl=" . $this->callbackUrl .
            ", expireTime=" . $this->expireTime . ", status=" . $this->status .
            ", result=" . json_encode($this->result) . ", creationTime=" . $this->creationTime .
            ", executeTime=" . $this->executeTime . ", platformIssuedTime=" . $this->platformIssuedTime .
            ", deliveredTime=" . $this->deliveredTime . ", issuedTimes=" . $this->issuedTimes .
            ", maxRetransmit=" . $this->maxRetransmit . "]";
    }
}