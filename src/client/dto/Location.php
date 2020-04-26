<?php
/**
 * Created by PhpStorm.
 * User: hWX538513
 * Date: 2018/12/6
 * Time: 15:36
 */

namespace iotyun\huaweiiot\client\dto;


class Location
{
    private $accuracy;
    private $crashInformation;
    private $description;
    private $heading;
    private $language;
    private $latitude;
    private $longitude;
    private $numberOfPassengers;
    private $region;
    private $time;
    private $vehicleSpeed;

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
        return "RegDirectDeviceInDTO [accuracy=" . json_encode($this->accuracy) . ", crashInformation=" .
            json_encode($this->crashInformation) . ", description=" . json_encode($this->description) . ", heading=" .
            $this->heading . ", language=" . $this->language . ", latitude=" . $this->latitude . ", longitude=" .
            $this->longitude . ", numberOfPassengers=" . $this->numberOfPassengers . ", region=" . $this->region .
            ", time=" . $this->time . ", vehicleSpeed=" . $this->vehicleSpeed . "]";
    }

}