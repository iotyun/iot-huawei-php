<?php
/**
 * Created by PhpStorm.
 * User: hWX538513
 * Date: 2018/10/27
 * Time: 10:27
 */

namespace iotyun\huaweiiot\client\dto;


class QueryUpgradeTaskOutDTO implements \JsonSerializable
{
    private $operationId;
    private $createTime;
    private $startTime;
    private $stopTime;
    private $operateType;
    private $targets;
    private $policy;
    private $status;
    private $staResult;
    private $extendPara;

    public function __set($name, $value)
    {
        if (property_exists($this, $name)) {
            $this->$name = $value;
        }
    }

    public function __get($name)
    {
        if (property_exists($this, $name)) {
            return isset($this->$name) ? $this->$name : null;
        }
    }

    public function jsonSerialize()
    {
        $data = [];
        foreach ($this as $key => $val) {
            if ($val !== null) $data[$key] = $val;
        }
        return $data;
    }

    public function __toString() {
        return "QueryUpgradeTaskOutDTO [operationId=" . $this->operationId . ", createTime=" . $this->createTime .
            ", startTime=" . $this->startTime . ", stopTime=" . $this->stopTime .
            ", operateType=" . $this->operateType .", targets=" . json_encode($this->targets) .
            ", policy=" . json_encode($this->policy) . ", status=" . $this->status . ", staResult=" .
            json_encode($this->staResult) . ", extendPara=" . json_encode($this->extendPara) . "]";
    }
}