<?php
/**
 * Created by PhpStorm.
 * User: hWX538513
 * Date: 2018/11/5
 * Time: 15:23
 */

namespace iotyun\huaweiiot\client\dto;


class PdIoMDTO
{
    private $time;
    private $utcOff;
    private $srsName;
    private $X;
    private $Y;
    private $radius;

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
        return "PdIoMDTO [time=" . $this->time . ", utcOff=" . $this->utcOff . ", srsName=" . $this->srsName .
            ", X=" . $this->X . ", Y=" . $this->Y . ", radius=" . $this->radius . "]";
    }
}