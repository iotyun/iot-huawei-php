<?php
/**
 * Created by PhpStorm.
 * User: hWX538513
 * Date: 2018/12/22
 * Time: 11:38
 */

namespace iotyun\huaweiiot\client\dto;


class GeoInfoDTO
{
    private $coordinateReferenceSystem;

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
        return "GeoInfoDTO [coordinateReferenceSystem=" . json_encode($this->coordinateReferenceSystem) . "]";
    }
}