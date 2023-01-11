<?php
$A=[ 5, -4, 3, 7, 2, 1, 0, 8, 9, 2];
$n = count($A);
sort($A);
echo'<pre>';
print_r($A);
die();
// function insertionSort($myArray): array
// {
//     for ($i = 0; $i < count($myArray); $i++) {
//         $val = $myArray[$i];
//         $j = $i - 1;
//         while ($j >= 0 && $myArray[$j] > $val) {
//             $myArray[$j + 1] = $myArray[$j];
//             $j--;
//         }
//         $myArray[$j + 1] = $val;
//     }
//     return $myArray;
// }

// $array = array(3, 0, 2, 5, -1, 4, 1);
// echo "Original Array :\n";
// echo implode(', ', $array);
// echo "<br>";
// echo "\nSorted Array :\n";
// print_r(insertionSort($array));
