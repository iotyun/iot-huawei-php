<?php
/**
 * Created by PhpStorm.
 * User: hWX538513
 * Date: 2018/10/27
 * Time: 10:39
 */

namespace iotyun\huaweiiot\client\dto;


class QueryUpgradeSubTaskInDTO implements \JsonSerializable, \arrayaccess
{
    private $subOperationStatus;
    private $pageNo;
    private $pageSize;

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
        return "QueryUpgradeSubTaskInDTO [subOperationStatus=" . $this->subOperationStatus . ", pageNo=" .
            $this->pageNo . ", pageSize=" . $this->pageSize . "]";
    }
}