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
        $number_list[0];
        for ($i = 1; $i <= $GLOBALS['SIZE']; $i++){
            //calculating factorial
            $number_list[$i] = ($number_list[$i - 1] * $i) % $GLOBALS['MOD'];
        }
        return $number_list;
        
        //returning factorial of every element
        function ReturnFactorial($number_list, $arr, $n){
            for($i = 0; $i < $n; $i++){
                return $fact[$arr[$i]];
            }
        }
        $fact = array_fill(0,$SIZE + 1, 0);
        $arr = array(3, 10, 200, 20, 12);
        $n = count($arr);
        $fact = factorial($fact);
        ReturnFactorial($fact,$arr,$n);
    }

    //f


}



?>