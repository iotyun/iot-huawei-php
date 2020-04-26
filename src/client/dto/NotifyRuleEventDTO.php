<?php
/**
 * Created by PhpStorm.
 * User: hWX538513
 * Date: 2018/10/23
 * Time: 17:55
 */

namespace iotyun\huaweiiot\client\dto;


class NotifyRuleEventDTO implements \JsonSerializable
{
    private $notifyType;
    private $author;
    private $ruleId;
    private $ruleName;
    private $logic;
    private $reasons;
    private $triggerTime;
    private $actionsResults;

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
        return "NotifyRuleEventDTO [notifyType=" . $this->notifyType . ", author=" . $this->author .
            ", ruleId=" . $this->ruleId . ", ruleName=" . $this->ruleName . ", logic=" . $this->logic .
            ", reasons=" . json_encode($this->reasons) . ", triggerTime=" . $this->triggerTime .
            ", actionsResults=" . json_encode($this->actionsResults) . "]";
    }
}