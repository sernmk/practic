<?php
/*
* 
* Example:
*     print_r(binarySum('1101', '101')); // 10010
*/
function binarySum(...$number)
{
    $sum = 0;
    foreach ($number as $item) {
        $sum += bindec($item);
    }
    $sum = decbin($sum);
    return $sum;
}
