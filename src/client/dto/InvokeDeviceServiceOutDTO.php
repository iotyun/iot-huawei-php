<?php
/**
 * Created by PhpStorm.
 * User: hWX538513
 * Date: 2018/10/25
 * Time: 15:30
 */

namespace iotyun\huaweiiot\client\dto;


class InvokeDeviceServiceOutDTO implements \JsonSerializable
{
    private $requestId;
    private $status;
    private $timeStamp;

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
        return "InvokeDeviceServiceOutDTO [requestId=" . $this->requestId .
            ", status=" . $this->status . ", timeStamp=" . $this->timeStamp . "]";
    }
}