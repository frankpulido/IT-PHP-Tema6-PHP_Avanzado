<?php
class Triangle extends Rectangle {
    // Constructor
    public function __construct($base, $height){
        Rectangle::__construct($base, $height);
    }
    // Interfaces : sólo es necesario sobrescribir how() y area(). __toString la hereda de Rectangle. Tampoco es necesario indicar "implements" porque Rectangle implmenta la interface.
    public function how() : string {
        return "The area of a " . __CLASS__ . " is half of the rectangle : the product of its base ($this->base) and its height ($this->height) divided by 2. Result : ";
    }
    public function area() : float {
        return (Rectangle::area() / 2);
    }
}
?>