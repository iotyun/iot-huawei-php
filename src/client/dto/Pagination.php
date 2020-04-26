<?php
/**
 * Created by PhpStorm.
 * User: hWX538513
 * Date: 2018/10/25
 * Time: 14:30
 */

namespace iotyun\huaweiiot\client\dto;


class Pagination implements \JsonSerializable
{
    private $pageNo;
    private $pageSize;
    private $totalSize;

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
        return "Pagination [pageNo=" . $this->pageNo . ", pageSize=" . $this->pageSize .
            ", totalSize=" . $this->totalSize . "]";
    }
}