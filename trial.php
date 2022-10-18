<?php
$MOD = 1000000007 ;
$SIZE = 10000 ;
 
function factorial($fact)
{
    $fact[0] = 1;
    for ($i = 1; $i <= $GLOBALS['SIZE']; $i++)
    {
 
        //calculating factorial
        $fact[$i] = ($fact[$i - 1] * $i) % $GLOBALS['MOD'];
    }
    return $fact;
}
 
//returning factorial of every element
function ReturnFactorial($fact, $arr, $n)
{
    for($i = 0; $i < $n; $i++)
    {
        return $fact[$arr[$i]];
    }
}

    $fact = array_fill(0,$SIZE + 1, 0);
 
    $arr = array(3, 10, 200, 20, 12);
    $n = count($arr);
    $fact = factorial($fact);
    ReturnFactorial($fact,$arr,$n);
?>