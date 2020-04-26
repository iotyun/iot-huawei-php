<?php
/**
 * Created by PhpStorm.
 * User: hWX538513
 * Date: 2018/10/25
 * Time: 14:54
 */

namespace iotyun\huaweiiot\client\dto;


class CreateDeviceCmdCancelTaskOutDTO implements \JsonSerializable
{
    private $taskId;
    private $appId;
    private $deviceId;
    private $status;
    private $totalCount;
    private $deviceCommands;

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
        return "CreateDeviceCmdCancelTaskOutDTO [taskId=" . $this->taskId . ", appId=" .
            $this->appId . ", deviceId=" . $this->deviceId . ", status=" . $this->status .
            ", totalCount=" . $this->totalCount . ", deviceCommands=" .json_encode($this->deviceCommands) . "]";
    }
}