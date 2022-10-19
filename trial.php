<?php

function Prime($number_list)
{

    if ($thisnumber_list <= 1)
        return false;
 
    for ($i = 2; $i < $thisnumber_list; $i++)
        if ($thisnumber_list % $i == 0)
            return false;
 
    return true;
}
 
function returnPrime($number_list)
{
    for ($i = 2; $i <= $thisnumber_list; $i++)
    {
        if (Prime($i))
            return $i;
    }
}
 

$number_list = array();


?>