<?php
/**
 * Created by PhpStorm.
 * User: hWX538513
 * Date: 2018/12/14
 * Time: 15:41
 */

namespace iotyun\huaweiiot\client\dto;


class ObjectNode1
{
    private $index;
    private $nodeId;
    private $deviceId;
    private $commandId;

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

    public function __toString() {
        return "ObjectNode1 [index=" . $this->index . ", nodeId=" . $this->nodeId .
            ", deviceId=" . $this->deviceId . ", commandId=" . $this->commandId . "]";
    }

}