<?php
/*
* This function takes a number and returns its factorial.
* The function is implemented using a linear iterative process.
* Example:
*      echo factorial(3); // 6
*/
function factorial($num)
{
	$iter = function($num, $acc) use (&$iter){
		if ($num < 2) {
			return $acc;
		}
		return $iter($num - 1, $num * $acc);
	};
    return $iter($num, 1);
}
