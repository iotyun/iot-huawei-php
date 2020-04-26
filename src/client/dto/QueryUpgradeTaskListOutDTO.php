<?php
/**
 * Created by PhpStorm.
 * User: hWX538513
 * Date: 2018/10/27
 * Time: 15:29
 */

namespace iotyun\huaweiiot\client\dto;


class QueryUpgradeTaskListOutDTO implements \JsonSerializable
{
    private $pageNo;
    private $pageSize;
    private $totalSize;
    private $data;

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
        return "QueryUpgradeTaskListOutDTO [pageNo=" . $this->pageNo . ", pageSize=" . $this->pageSize .
            ", totalSize=" . $this->totalSize . ", data=" . json_encode($this->data) . "]";
    }
}