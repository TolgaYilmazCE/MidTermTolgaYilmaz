<?php
class Automobile {

public $LicencePlate;
public $Brand;
public $Model;
public $ModelYear;
public $Color;

function construct($LicencePlate, $Brand, $Model, $ModelYear, $Color){
    $this->LicencePlate=$LicencePlate;
    $this->Brand = $Brand;
    $this->Model = $Model;
    $this->ModelYear = $ModelYear;
    $this->Color = $Color;

}

function toString() {
    return $this->LicencePlate . " :" .$this->Brand . " " . $this->Model. " " . $this->ModelYear. " " . $this->Color;
}

}