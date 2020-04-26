<?php
/**
 * Created by PhpStorm.
 * User: hWX538513
 * Date: 2018/10/18
 * Time: 9:53
 */

namespace iotyun\huaweiiot\client\dto;


class BatchTaskCreateInDTO implements \JsonSerializable
{
    private $appId;
    private $timeout;
    private $taskName;
    private $taskType;
    private $param;
    private $tags;

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


    public function __toString(){
        return "BatchTaskCreateInDTO [appId=" . $this->appId . ", timeout=" . $this->timeout .
            ", taskName=" . $this->taskName . ", taskType=" . $this->taskType .
            ", param=" . json_encode($this->param) . ", tags=" . json_encode($this->tags) . "]";
    }
}