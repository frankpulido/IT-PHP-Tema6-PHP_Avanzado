<?php
class Rectangle implements Shape {
    protected $base;
    protected $height;

    public function __construct($base, $height){
        $this->base = $base;
        $this->height = $height;
    }
    // Getters
    public function getBase(){
        return $this->base;
    }
    public function getHeight(){
        return $this->height;
    }
    //Setters
    public function setBase($base){
        $this->base = $base;
    }
    public function setHeight($height){
        $this->height = $height;
    }

    // Implements
    public function how() : string {
        return "The area of a " . __CLASS__ . " is the product of its base ($this->base) and its height ($this->height). Result : ";
    }
    public function area() : float {
        return $this->base * $this->height;
    }
    public function __toString(){
        return $this->how() . $this->area();
    }
}
?>