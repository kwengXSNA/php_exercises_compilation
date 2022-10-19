<?php
class Calculator{

    //a
    //a property that accepts an array of numbers
    public $number_list = array();

    function __construct($number_list){ 
        $this->number_list = $number_list;
    }

    //b
    //a method that adds the numbers inside the number_list
    public function Add(){
        $sumOfArray = array_sum($this->number_list);
        return $sumOfArray;   
    }

    //c
    //Subtract – a method that subtracts the first two numbers inside the number_list property 
    public function Subtract(){
        $diffOfArray = $this->number_list[0] - $this->number_list[1];
        rsort($this->number_list);
        for ($i=2, $count = count($this->number_list);$i<$count; $i++) {
            $diffOfArray = $this->number_list [$i] - $diffOfArray;
        }
        return $diffOfArray;
    }

    //d
    //a method that adds the numbers inside the number_list property and divides it by the number of items inside the number_list 
    public function Divide(){
        $avrgOfArray = array_sum($this->number_list)/count($this->number_list);
        return $avrgOfArray;
    }

    //e
    //a method that returns the factorial of each number inside the number_list
    public function Factorial($fact, $number_list, $n){
        $fact = 0;
        for($i = 0; $i < $n; $i++){
            return $fact[$number_list[$i]];
        }
    }

    //f
    //a method that returns an array of all prime numbers inside the number_list If no prime numbers are found, the method will return an empty array
    function Prime(){
        if ($this->number_list <= 1)
            return false;
        
        for ($i = 2; $i < $this->number_list; $i++)
        if ($this->number_list % $i == 0)
            return false;
            
        return true;
    }
    
    function returnPrime($number_list){
        
        for ($i = 2; $i <= $this->number_list; $i++){
            if (Prime($i))
            return $i;

            else
            return $number_list;
        }
    }
 

}

?>