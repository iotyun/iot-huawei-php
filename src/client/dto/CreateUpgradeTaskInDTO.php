<?php
/**
 * Created by PhpStorm.
 * User: hWX538513
 * Date: 2018/10/26
 * Time: 16:06
 */

namespace iotyun\huaweiiot\client\dto;


class CreateUpgradeTaskInDTO implements \JsonSerializable, \arrayaccess
{
    private $fileId;
    private $targets;
    private $policy;

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
        return "CreateUpgradeTaskInDTO [fileId=" . $this->fileId . ", targets=" . json_encode($this->targets) .
            ", policy=" . json_encode($this->policy) . "]";
    }
}