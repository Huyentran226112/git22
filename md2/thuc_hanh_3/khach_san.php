<?php
$matrix = [
    [0, 1, 1, 2],
    [0, 5, 0, 0], 
    [2, 0, 3, 3]
];
$sum=0;
 for($i=0;$i<count($matrix[0]);$i++){
    for($j= 0;$j < count($matrix);$j++){
        if($matrix[$j][$i] !== 0){
        $sum+=$matrix[$j][$i];
    }
    else{
        break;
        }
    }
 }
 echo $sum; 