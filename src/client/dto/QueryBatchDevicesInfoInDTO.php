<?php
/**
 * Created by PhpStorm.
 * User: hWX538513
 * Date: 2018/10/25
 * Time: 16:26
 */

namespace iotyun\huaweiiot\client\dto;


class QueryBatchDevicesInfoInDTO implements \JsonSerializable, \arrayaccess
{
    private $appId;
    private $gatewayId;
    private $status;
    private $nodeType;
    private $deviceType;
    private $pageNo;
    private $pageSize;
    private $startTime;
    private $endTime;
    private $sort;
    private $select;
    
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
        return "QueryDevicesInDTO [appId=" . $this->appId . ", gatewayId=" . $this->gatewayId . ", status=" .
            $this->status . ", nodeType=" . $this->nodeType . ", deviceType=" .
            $this->deviceType . ", pageNo=" . $this->pageNo . ", pageSize=" . $this->pageSize .
            ", startTime=" . $this->startTime . ", endTime=" . $this->endTime .
            ", sort=" . $this->sort . ", select=" . $this->select . "]";
    }
}