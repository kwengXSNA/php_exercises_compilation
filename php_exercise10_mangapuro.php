<?php

    class Circle{
        
        public $radius;

        function __construct($radius){
            $this->radius=$radius;
    
        }

        public function circumference(){
            $circumference=2*pi()*$this->radius;
            return $circumference;
        }

        public function diameter(){
            $diameter=2*$this->radius;
            return $diameter;
        }

        public function area(){
            $area=pi()*pow($this->radius,2);
            return $area;
        }
    }
    $set_radius = new Circle(12);
    echo "The circle with a radius of " .$set_radius->radius. " has a diameter of " .$set_radius->diameter() . " with its circumference at " .$set_radius->circumference() . " and area of " .$set_radius->area().".";

?>