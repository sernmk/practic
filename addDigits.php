<?php
/*
* This function takes a number and iteratively adds up all the numbers
* included in it until there is only one digit left.
*
* Example:
*      print_r (addDigits(106)); // 7
*/
function addDigits($number)
{
    if ($number < 9) {
        return $number;
    }
    $arrayNumber = str_split($number);
    $sum = 0;
    while (sizeof($arrayNumber) != 1) {
        foreach ($arrayNumber as $value) {
            $sum += $value;
        }
        unset($arrayNumber);
        $arrayNumber = str_split($sum);
        $sum = 0;
    }
    return $arrayNumber[0];
}
