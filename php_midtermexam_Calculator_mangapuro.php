<?php
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
            $diffOfArray = $array [$i] - $diffOfArray;
        }
        return $diffOfArray;
    }

    //d
    public function Divide(){
        $avrgOfArray = array_sum($this->number_list)/count($this->number_list);
        return $avrgOfArray;
    }

    //e
    function Factorial() {
        $fact[0] = 1;
        for ($i = 1; $i <= $GLOBALS['SIZE']; $i++){
            //calculating factorial
            $fact[$i] = ($fact[$i - 1] * $i) % $GLOBALS['MOD'];
        }

        //returning factorial of every element
        function ReturnFactorial($fact, $number_list, $n){
            for($i = 0; $i < $n; $i++){
                return $fact[$number_list[$i]];
            }
        }
        
        $fact = array_fill(0,$SIZE + 1, 0);
 
        $number_list = array();
        $n = count($arr);
        $fact = factorial($fact);
        ReturnFactorial($fact,$number_list,$n);
    }

}



?>