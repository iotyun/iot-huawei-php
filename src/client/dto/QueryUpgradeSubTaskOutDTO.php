<?php
/**
 * Created by PhpStorm.
 * User: hWX538513
 * Date: 2018/10/27
 * Time: 10:42
 */

namespace iotyun\huaweiiot\client\dto;


class QueryUpgradeSubTaskOutDTO implements \JsonSerializable
{
    private $pageNo;
    private $pageSize;
    private $totalCount;
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
        return "QueryUpgradeSubTaskOutDTO [pageNo=" . $this->pageNo . ", pageSize=" . $this->pageSize .
            ", totalCount=" . $this->totalCount . ", data=" . json_encode($this->data) . "]";
    }
}