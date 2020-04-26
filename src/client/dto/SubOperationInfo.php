<?php
/**
 * Created by PhpStorm.
 * User: hWX538513
 * Date: 2018/10/27
 * Time: 10:44
 */

namespace iotyun\huaweiiot\client\dto;


class SubOperationInfo implements \JsonSerializable, \arrayaccess
{
    private $subOperationId;
    private $createTime;
    private $startTime;
    private $stopTime;
    private $operateType;
    private $deviceId;
    private $status;
    private $detailInfo;
    private $extendInfo;

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
        return "SubOperationInfo [subOperationId=" . $this->subOperationId . ", createTime=" . $this->createTime .
            ", startTime=" . $this->startTime . ", stopTime=" . $this->stopTime . ", operateType=" .
            $this->operateType . ", deviceId=" . $this->deviceId . ", status=" . $this->status .
            ", detailInfo=" . $this->detailInfo .", extendInfo=" . json_encode($this->extendInfo) . "]";
    }
}