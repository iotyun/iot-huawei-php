<?php
/**
 * Created by PhpStorm.
 * User: hWX538513
 * Date: 2018/10/25
 * Time: 22:06
 */

namespace iotyun\huaweiiot\client\dto;


class ServiceCommandPara implements \JsonSerializable
{
    private $paraName;
    private $dataType;
    private $required;
    private $min;
    private $max;
    private $step;
    private $maxLength;
    private $unit;
    private $enumList;

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
        return "ServiceCommandPara [paraName=" . $this->paraName . ", dataType=" .
            $this->dataType . ", required=" . $this->required . ", min=" . $this->min .
            ", max=" . $this->max . ", step=" . $this->step . ", maxLength=" .
            $this->maxLength . ", unit=" . $this->unit . ", enumList=" . json_encode($this->enumList) . "]";
    }
}