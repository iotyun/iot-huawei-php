<?php
/**
 * Created by PhpStorm.
 * User: hWX538513
 * Date: 2018/10/18
 * Time: 11:56
 */

namespace iotyun\huaweiiot\client\dto;


class QueryTaskDetailsInDTO implements \JsonSerializable
{
    private $appId;
    private $taskId;
    private $status;
    private $index;
    private $nodeId;
    private $deviceId;
    private $commandId;
    private $pageNo;
    private $pageSize;

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
        return "QueryTaskDetailsInDTO [appId=" . $this->appId . ", taskId=" . $this->taskId .
            ", status=" . $this->status . ", index=" . $this->index . ", nodeId=" . $this->nodeId .
            ", deviceId=" . $this->deviceId . ", commandId=" . $this->commandId . ", pageNo=" . $this->pageNo .
            ", pageSize=" . $this->pageSize . "]";
    }

}