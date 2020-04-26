<?php
/**
 * Created by PhpStorm.
 * User: hWX538513
 * Date: 2018/10/25
 * Time: 16:30
 */

namespace iotyun\huaweiiot\client\dto;


class QueryBatchDevicesInfoOutDTO implements \JsonSerializable
{
    private $totalCount;
    private $pageNo;
    private $pageSize;
    private $devices;

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
        return "QueryDevicesOutDTO [totalCount=" . $this->totalCount . ", pageNo=" . $this->pageNo .
            ", pageSize=" . $this->pageSize . ", devices=" . json_encode($this->devices) . "]";
    }
}