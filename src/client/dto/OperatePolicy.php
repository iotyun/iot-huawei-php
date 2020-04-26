<?php
/**
 * Created by PhpStorm.
 * User: hWX538513
 * Date: 2018/10/26
 * Time: 16:11
 */

namespace iotyun\huaweiiot\client\dto;


class OperatePolicy implements \JsonSerializable, \arrayaccess
{
    private $executeType;
    private $startTime;
    private $endTime;
    private $retryType;
    private $retryTimes;

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
        return "OperatePolicy [executeType=" . $this->executeType . ", startTime=" . $this->startTime .
            ", endTime=" . $this->endTime . ", retryType=" . $this->retryType .
            ", retryTimes=" . $this->retryTimes . "]";
    }
}