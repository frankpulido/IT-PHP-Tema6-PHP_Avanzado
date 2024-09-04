<?php
class Square extends Rectangle {
    public function __construct($base){
        Rectangle::__construct($base, $base);
    }
    // Interface : sólo es necesario sobrescribir how(). Las funciones area() y __toString las hereda de Rectangle.  Tampoco es necesario indicar "implements" porque Rectangle implmenta la interface.
    public function how() : string {
        return "The area of a " . __CLASS__ . " is the product of its base ($this->base) and its height which equals the base ($this->base). Result : ";
    }
}
?>