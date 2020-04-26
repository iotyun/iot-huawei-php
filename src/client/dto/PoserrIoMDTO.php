<?php
/**
 * Created by PhpStorm.
 * User: hWX538513
 * Date: 2018/11/5
 * Time: 15:26
 */

namespace iotyun\huaweiiot\client\dto;


class PoserrIoMDTO
{
    private $time;
    private $resid;
    private $add_info;

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
        return "PoserrIoMDTO [time=" . $this->time . ", resid=" . $this->resid .
            ", add_info=" . $this->add_info . "]";
    }
}