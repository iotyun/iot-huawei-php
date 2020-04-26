<?php
/**
 * Created by PhpStorm.
 * User: hWX538513
 * Date: 2018/10/26
 * Time: 11:14
 */

namespace iotyun\huaweiiot\client\dto;


class QueryDeviceGroupsOutDTO implements \JsonSerializable
{
    private $totalCount;
    private $pageNo;
    private $pageSize;
    private $list;

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
        return "QueryDeviceGroupsOutDTO [totalCount=" . $this->totalCount . ", pageNo=" . $this->pageNo .
            ", pageSize=" . $this->pageSize . ", list=" . json_encode($this->list) . "]";
    }
}