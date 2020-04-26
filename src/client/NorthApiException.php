<?php
/**
 * Created by PhpStorm.
 * User: hWX538513
 * Date: 2018/10/8
 * Time: 11:17
 */

namespace iotyun\huaweiiot\client;

use iotyun\huaweiiot\constant\ExceptionEnum;

class NorthApiException extends \Exception{
    
    private static $serialVersionUID = 2121441514188;
    private $error_code = null;
    private $error_desc = null;
    private $httpStatusCode = -1;
    private $httpReasonPhase = "";
    private $httpMessage = "";

    public function __construct(){

        $a = func_get_args();
        $i = func_num_args();
        if (method_exists($this, $f = '__construct' . $i)) {
            call_user_func_array(array($this, $f), $a);

        }
    }

    function __construct0(){

    }

    function __construct1($a){

        if ($a instanceof ExceptionEnum ===false)
            parent::__construct($a);
        elseif ($a instanceof ExceptionEnum){
            $this->error_code = $a->errorCode;
            $this->error_desc = $a->errorDesc;
        }
    }

    function __construct2(ExceptionEnum $a1,$a2){

        $this->error_code = $a1->errorCode;
        $this->error_desc = $a1->errorDesc;
        $this->httpMessage = $a2;
    }

    public function __set($name, $value){

        $this->$name = $value;
    }

    public function __get($name){

        return isset($this->$name) ? $this->$name : null;
    }


    public function __toString(){

        return "NorthApiException [error_code=" . $this->error_code . ", error_desc=" . $this->error_desc . ", httpStatusCode=" . $this->httpStatusCode . ", httpReasonPhase=" . $this->httpReasonPhase . ", httpMessage=" . json_encode($this->httpMessage) . "]";
    }
}