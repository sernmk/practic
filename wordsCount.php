<?php
/*
* This function takes a string and counts how many times each word is repeated.
* Example use:
*    print_r(wordsCount('one tree two tree   two  tree two  bag   '));
*    result:
*            Array
* (
*                [one] => 1
*                [tree] => 3
*                [two] => 3
*                [bag] => 1
* )
*/
function wordsCount($string)
{
    $result = explode(" ", $string);
    $newArray = [];
    foreach ($result as $value) {
        if ($value != '') {
            !array_key_exists($value, $newArray) ? $newArray[$value] = 1 : $newArray[$value] += 1;            
        }
    }
    return $newArray;
}
