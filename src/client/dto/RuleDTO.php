<?php
/**
 * Created by PhpStorm.
 * User: hWX538513
 * Date: 2018/10/18
 * Time: 17:48
 */

namespace iotyun\huaweiiot\client\dto;


class RuleDTO implements \JsonSerializable
{
    private $ruleId;
    private $appKey;
    private $name;
    private $description;
    private $author;
    private $conditions;
    private $logic;
    private $timeRange;
    private $actions;
    private $matchNow;
    private $status;
    private $groupExpress;
    private $triggerSources;
    private $timezoneID;
    private $transData;
    private $executor;
    private $refreshId;
    private $checkNullAction;
    private $priority;
    private $tags;
    private $rulePreProcessors;

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
        return "RuleDTO [ruleId=" . $this->ruleId . ", appKey=" . $this->appKey .
            ", name=" . $this->name . ", description=" . $this->description .
            ", author=" . $this->author . ", conditions=" . json_encode($this->conditions) .
            ", logic=" . $this->logic . ", timeRange=" . json_encode($this->timeRange) .
            ", actions=" . json_encode($this->actions) . ", matchNow=" . $this->matchNow .
            ", status=" . $this->status . ", groupExpress=" . json_encode($this->groupExpress) .
            ", triggerSources=" . json_encode($this->triggerSources) . ", timezoneID=" .
            $this->timezoneID . ", transData=" . json_encode($this->transData) . ", executor=" .
            $this->executor . ", refreshId=" . $this->refreshId . ", checkNullAction=" .
            $this->checkNullAction . ", priority=" . $this->priority . ", tags=" . json_encode($this->tags) .
            ", rulePreProcessors=" . json_encode($this->rulePreProcessors) . "]";
    }
}