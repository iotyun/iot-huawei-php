<?php
/**
 * Created by PhpStorm.
 * User: hWX538513
 * Date: 2018/10/18
 * Time: 11:53
 */

namespace iotyun\huaweiiot\client\dto;


class QueryTaskDetailsOutDTO
{
    private $totalCount;
    private $pageNo;
    private $pageSize;
    private $taskDetails;

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
        return "QueryTaskDetailsOutDTO [totalCount=" . $this->totalCount . ", pageNo=" . $this->pageNo .
            ", pageSize=" . $this->pageSize . ", taskDetails=" . json_encode($this->taskDetails) . "]";
    }
}