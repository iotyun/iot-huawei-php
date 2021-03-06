<?php
/**
 * Created by PhpStorm.
 * User: hWX538513
 * Date: 2018/10/25
 * Time: 21:30
 */

namespace iotyun\huaweiiot\client\dto;


class DeviceDataHistoryDTO implements \JsonSerializable
{
    private $deviceId;
    private $gatewayId;
    private $appId;
    private $serviceId;
    private $data;
    private $timestamp;

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
        return "DeviceDataHistoryDTO [deviceId=" . $this->deviceId . ", gatewayId=" .
            $this->gatewayId . ", appId=" . $this->appId . ", serviceId=" . $this->serviceId .
            ", data=" . json_encode($this->data) . ", timestamp=" . $this->timestamp . "]";
    }
}