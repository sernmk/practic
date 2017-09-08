<?php
/*
* This function, which creates a new array with unique values of the received array.
*/
function uniq($array) {
    $uniqArray = [];
    foreach ($array as $value) {
        if (!in_array($value, $uniqArray)) {
            $uniqArray[] = $value;
        }
    }
    return $uniqArray;
}
