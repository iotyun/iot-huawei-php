<?php
/**
 * Created by PhpStorm.
 * User: hWX538513
 * Date: 2018/10/26
 * Time: 15:29
 */

namespace iotyun\huaweiiot\client\dto;


class QueryUpgradePackageOutDTO implements \JsonSerializable
{
    private $fileId;
    private $name;
    private $version;
    private $fileType;
    private $deviceType;
    private $model;
    private $manufacturerName;
    private $protocolType;
    private $description;
    private $date;
    private $uploadTime;

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
        return "QueryUpgradePackageOutDTO [fileId=" . $this->fileId . ", name=" . $this->name .
            ", version=" . $this->version . ", fileType=" . $this->fileType . ", deviceType=" .
            $this->deviceType . ", model=" . $this->model . ", manufacturerName=" . $this->manufacturerName .
            ", protocolType=" . $this->protocolType . ", description=" . $this->description .
            ", date=" . $this->date . ", uploadTime=" . $this->uploadTime . "]";
    }
}