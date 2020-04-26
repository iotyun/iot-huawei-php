<?php
/**
 * Created by PhpStorm.
 * User: hWX538513
 * Date: 2018/10/25
 * Time: 15:03
 */

namespace iotyun\huaweiiot\client\dto;


class QueryDeviceCmdCancelTaskInDTO implements \JsonSerializable
{
    public $pageNo;
    public $pageSize;
    public $taskId;
    public $deviceId;
    public $status;
    public $startTime;
    public $endTime;
    public $appId;

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
        return "QueryDeviceCmdCancelTaskInDTO [pageNo=" . $this->pageNo .
            ", pageSize=" . $this->pageSize . ", taskId=" . $this->taskId .
            ", deviceId=" . $this->deviceId . ", status=" . $this->status .
            ", startTime=" . $this->startTime . ", endTime=" . $this->endTime .
            ", appId=" . $this->appId . "]";
    }
}