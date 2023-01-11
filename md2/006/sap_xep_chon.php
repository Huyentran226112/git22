<?php
$A = [5,8,7,2,4,6];
$n = count($A);
for($i = 0;$i< $n-1; $i++){
    $min = $i;
    for($j = $i+1; $j < $n; $j++){
      if( $A[$j] < $A[$min]){
        $min = $j;
     } 
    
    } 
    if($min!=$i){
        $t =$A[$min];
        $A[$min]=$A[$i];
        $A[$i]=$t;
      }
}
echo'<pre>';
print_r($A);
die();


// function selectionSort($array)
// {
//     for ($i = 0; $i < count($array) - 1; $i++) {
//         $min = $i;
//         for ($j = $i + 1; $j < count($array); $j++) {
//             if ($array[$j] < $array[$min]) {
//                 $min = $j;
//             }
//         }
//         $array = swapPositions($array, $i, $min);
//     }
//     return $array;
// }

// function swapPositions($data, $left, $right)
// {
//     $backupOldDataRightValue = $data[$right];
//     $data[$right] = $data[$left];
//     $data[$left] = $backupOldDataRightValue;
//     return $data;
// }

// $myArray = [3, 0, 2, 5, -1, 4, 1];
// echo "Original Array :\n";
// echo implode(', ', $myArray);
// echo "<br>";
// echo "\nSorted Array :\n";
// echo implode(', ', selectionSort($myArray));