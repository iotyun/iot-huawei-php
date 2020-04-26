<?php
/**
 * Created by PhpStorm.
 * User: hWX538513
 * Date: 2018/10/25
 * Time: 15:36
 */

namespace iotyun\huaweiiot\client\dto;


class CommandNA2CloudHeader implements \JsonSerializable
{
    private $mode;
    private $from;
    private $to;
    private $toType;
    private $method;
    private $requestId;
    private $callbackURL;

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
        return "CommandNA2CloudHeader [mode=" . $this->mode . ", from=" . $this->from .
            ", to=" . $this->to . ", toType=" . $this->toType . ", method=" .
            $this->method . ", requestId=" . $this->requestId . ", callbackURL=" .
            $this->callbackURL . "]";
    }
}