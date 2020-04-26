<?php
/**
 * Created by PhpStorm.
 * User: hWX538513
 * Date: 2018/10/11
 * Time: 11:47
 */

namespace iotyun\huaweiiot\client\dto;


class SSLConfig
{
    private $selfCertPath;
    private $selfCertPwd;
    private $trustCAPath;
    private $trustCAPwd;

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

    public function __toString(){
        return "SSLConfig [selfCertPath=" . $this->selfCertPath . ", trustCAPath=" . $this->trustCAPath . "]";
    }
}