<?php
/**
 * Created by PhpStorm.
 * User: hWX538513
 * Date: 2018/12/14
 * Time: 15:34
 */

namespace iotyun\huaweiiot\client\dto;


class QueryTaskDetailDTOCloud2NA
{
    private $status;
    private $output;
    private $error;
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

    public function __toString() {
        return "QueryTaskDetailDTOCloud2NA [status=" . $this->status . ", output=" . $this->output .
            ", error=" . $this->error . ", param=" . json_encode($this->param) . "]";
    }
}