<?php
/**
 * Created by PhpStorm.
 * User: hWX538513
 * Date: 2018/10/23
 * Time: 17:44
 */

namespace iotyun\huaweiiot\client\dto;


class MessageConfirmHeader implements \JsonSerializable
{
    private $requestId;
    private $from;
    private $to;
    private $status;
    private $timestamp;

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
        return "MessageConfirmHeader [requestId=" . $this->requestId . ", from=" . $this->from . ", to=" . $this->to .
            /* 53 */       ", status=" . $this->status . ", timestamp=" . $this->timestamp . "]";
    }
}