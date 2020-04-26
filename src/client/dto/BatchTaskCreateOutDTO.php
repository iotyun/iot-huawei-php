<?php
/**
 * Created by PhpStorm.
 * User: hWX538513
 * Date: 2018/10/18
 * Time: 10:02
 */

namespace iotyun\huaweiiot\client\dto;


class BatchTaskCreateOutDTO
{
    private $taskID;

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
        return "BatchTaskCreateOutDTO [taskID=" . $this->taskID . "]";
    }
}