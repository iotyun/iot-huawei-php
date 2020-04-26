<?php
/**
 * Created by PhpStorm.
 * User: hWX538513
 * Date: 2018/10/25
 * Time: 21:42
 */

namespace iotyun\huaweiiot\client\dto;


class QueryDeviceDesiredHistoryInDTO implements \JsonSerializable, \arrayaccess
{
    private $appId;
    private $deviceId;
    private $gatewayId;
    private $serviceId;
    private $property;
    private $pageNo;
    private $pageSize;
    private $startTime;
    private $endTime;

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

    public function offsetSet($offset, $value) {
        var_dump(__METHOD__);
    }

    public function offsetExists($var) {
        var_dump(__METHOD__);
        if ($var == "foobar") {
            return true;
        }
        return false;
    }

    public function offsetUnset($var) {
        var_dump(__METHOD__);
    }

    public function offsetGet($var) {
        var_dump(__METHOD__);
        return "value";
    }

    public function __toString() {
        return "QueryDeviceDesiredHistoryInDTO [appId=" . $this->appId . ", serviceId=" .
            $this->serviceId . ", property=" . $this->property . ", deviceId=" . $this->deviceId . ", gatewayId=" .
            $this->gatewayId . ", pageNo=" . $this->pageNo . ", pageSize=" . $this->pageSize .
            ", startTime=" . $this->startTime . ", endTime=" . $this->endTime . "]";
    }
}