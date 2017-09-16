/*
* This function takes an array and returns as an array the number of occurrences of each key.
* Example:
*      $array = [1, 5, 4, 8, 3, 8, 4, 5, 5, 9];
*      print_r(countKey($array));
*      //Array
*        (
*           [1] => 1
*           [5] => 3
*           [4] => 2
*           [8] => 2
*           [3] => 1
*           [9] => 1
*        )
*/
function countKey($array)
{
    $result = array_reduce($array, function ($acc, $item) {
       if (!array_key_exists($item, $acc)) {
           $acc[$item] = 1;
       } else {
           $acc[$item]++;
       }
       return $acc;
    }, []);
    return $result;
}
