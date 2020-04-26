<?php
/**
 * Created by PhpStorm.
 * User: hWX538513
 * Date: 2018/10/27
 * Time: 10:34
 */

namespace iotyun\huaweiiot\client\dto;


class OperationStaResult implements \JsonSerializable
{
    private $total;
    private $wait;
    private $processing;
    private $success;
    private $fail;
    private $stop;
    private $timeout;

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
        return "OperationStaResult [total=" . $this->total . ", wait=" . $this->wait . ", processing=" .
            $this->processing . ", success=" . $this->success . ", fail=" . $this->fail . ", stop=" .
            $this->stop . ", timeout=" . $this->timeout . "]";
    }
}