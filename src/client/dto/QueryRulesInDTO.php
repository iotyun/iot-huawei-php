<?php
/**
 * Created by PhpStorm.
 * User: hWX538513
 * Date: 2018/10/18
 * Time: 21:14
 */

namespace iotyun\huaweiiot\client\dto;


class QueryRulesInDTO implements \JsonSerializable
{
    private $name;
    private $author;
    private $appId;
    private $select;

    public function __set($name, $value){
        if (property_exists($this,$name)){
            $this->$name = $value;
        }
    }

    public function __get($name){
        if (property_exists($this,$name)){
            return isset($this->$name) ? $this->$name : null;
        }
    }

    public function jsonSerialize() {
        $data = [];
        foreach ($this as $key=>$val){
            if ($val !== null) $data[$key] = $val;
        }
        return $data;
    }

    public function __toString() {
        return "QueryRulesInDTO [name=" . $this->name . ", author=" . $this->author .
            ", appId=" . $this->appId . ", select=" . $this->select . "]";
    }
}