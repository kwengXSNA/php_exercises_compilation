<?php
$MOD = 1000000007;
$SIZE = 10000;
class Calculator{

    //a
    public $number_list = array();

    function __construct($number_list){
        $this->number_list = $number_list;
    }

    //b
    public function Add(){
        $sumOfArray = array_sum($this->number_list);
        return $sumOfArray;   
    }

    //c
    public function Subtract(){
        $diffOfArray = $this->number_list[0] - $this->number_list[1];
        rsort($this->number_list);
        for ($i=2, $count = count($this->number_list);$i<$count; $i++) {
            $diffOfArray = $this->number_list [$i] - $diffOfArray;
        }
        return $diffOfArray;
    }

    //d
    public function Divide(){
        $avrgOfArray = array_sum($this->number_list)/count($this->number_list);
        return $avrgOfArray;
    }

    //e
    //returning factorial of every element
    public function Factorial($fact, $number_list, $n){
        for($i = 0; $i < $n; $i++){
            return $fact[$number_list[$i]];
        }
    }

    public function Prime(){
        
    }

}



?>