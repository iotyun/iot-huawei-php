<?php
/**
 * Created by PhpStorm.
 * User: hWX538513
 * Date: 2018/11/5
 * Time: 17:31
 */

namespace iotyun\huaweiiot\client\dto;


class ActionEmail implements \JsonSerializable
{
    private $type;
    private $id;
    private $email;
    private $content;
    private $subject;
    private $title;
    private $accountId;

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
        return "ActionEmail [type=" . $this->type . ", id=" . $this->id . ", email=" . $this->email .
            ", content=" . $this->content . ", subject=" . $this->subject . ", title=" . $this->title .
            ", accountId=" . $this->accountId . "]";
    }
}