<?php
// PHP program to calculate average
// of array elements
 
// Function that return average of
// an array.
function average( $a, $n)
{
     
    // Find sum of array element
    $sum = 0;
    for ( $i = 0; $i < $n; $i++)
        $sum += $a[$i];
 
    return $sum / $n;
}
 
// Driver code
    $arr = array(10, 2, 3, 4, 5,
                        6, 7, 8, 9);
    $n = count($arr);
 
    echo average($arr, $n);
 
// This code is contributed by anuj_67.
?>