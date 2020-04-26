<?php
/**
 * Created by PhpStorm.
 * User: hWX538513
 * Date: 2018/10/26
 * Time: 10:11
 */

namespace iotyun\huaweiiot\client\dto;


class CreateDeviceGroupOutDTO implements \JsonSerializable
{
    private $name;
    private $description;
    private $id;
    private $appId;
    private $maxDevNum;
    private $curDevNum;
    private $deviceIds;

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
        return "CreateDeviceGroupOutDTO [name=" . $this->name . ", description=" . $this->description .
            ", id=" . $this->id . ", appId=" . $this->appId . ", maxDevNum=" . $this->maxDevNum .
            ", curDevNum=" . $this->curDevNum . ", deviceIds=". json_encode($this->deviceIds) . "]";
    }
}