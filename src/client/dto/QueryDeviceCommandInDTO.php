<?php
/**
 * Created by PhpStorm.
 * User: hWX538513
 * Date: 2018/10/25
 * Time: 14:22
 */

namespace iotyun\huaweiiot\client\dto;


class QueryDeviceCommandInDTO implements \JsonSerializable
{
    public $pageNo;
    public $pageSize;
    public $deviceId;
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
        return "QueryDeviceCommandInDTO [pageNo=" . $this->pageNo . ", pageSize=" .
            $this->pageSize . ", deviceId=" . $this->deviceId . ", startTime=" .
            $this->startTime . ", endTime=" . $this->endTime . ", appId=" . $this->appId . "]";
    }
}