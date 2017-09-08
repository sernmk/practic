<?php
/*
* This function, which receives a string and returns it inverted.
*/
function reverse($string)
{
    $result = '';
    for ($i = strlen($string) - 1; $i >= 0; $i--) {
        $result = $result.$string[$i];
    }
    return $result;
}
