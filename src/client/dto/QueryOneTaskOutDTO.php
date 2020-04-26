<?php
/**
 * Created by PhpStorm.
 * User: hWX538513
 * Date: 2018/10/18
 * Time: 11:07
 */

namespace iotyun\huaweiiot\client\dto;


class QueryOneTaskOutDTO implements \JsonSerializable
{
    private $taskId;
    private $taskName;
    private $appId;
    private $operator;
    private $taskFrom;
    private $taskType;
    private $status;
    private $startTime;
    private $timeout;
    private $progress;
    private $totalCnt;
    private $successCnt;
    private $successRate;
    private $failCnt;
    private $timeoutCnt;
    private $expiredCnt;
    private $completeCnt;
    private $param;

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
        return "QueryOneTaskOutDTO [taskId=" . $this->taskId . ", taskName=" . $this->taskName .
            ", appId=" . $this->appId . ", operator=" . $this->operator . ", taskFrom=" . $this->taskFrom .
            ", taskType=" . $this->taskType . ", status=" . $this->status . ", startTime=" . $this->startTime .
            ", timeout=" . $this->timeout . ", progress=" . $this->progress .", totalCnt=" . $this->totalCnt .
            ", successCnt=" . $this->successCnt . ", successRate=" . $this->successRate .
            ", failCnt=" . $this->failCnt . ", timeoutCnt=" . $this->timeoutCnt . ", expiredCnt=" . $this->expiredCnt .
            ", completeCnt=" . $this->completeCnt . ", param=" . json_encode($this->param) . "]";
    }
}