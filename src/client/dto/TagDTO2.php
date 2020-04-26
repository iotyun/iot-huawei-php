<?php
/**
 * Created by PhpStorm.
 * User: hWX538513
 * Date: 2018/11/5
 * Time: 15:49
 */

namespace iotyun\huaweiiot\client\dto;


class TagDTO2
{
    private $tagName;
    private $tagValue;

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

    public function __toString(){
        return "TagDTO2 [tagName=" . $this->tagName . ", tagValue=" . $this->tagValue . "]";
    }
}