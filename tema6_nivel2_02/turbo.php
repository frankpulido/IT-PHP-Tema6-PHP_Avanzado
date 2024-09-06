<?php
trait Turbo {
    public function Boost(){
        $this->maxSpeed += 50;
        echo "Se ha activado el TURBO !!!!. Ahora puedo alcanzar $this->maxSpeed Km/h." . PHP_EOL;
    }
}
?>