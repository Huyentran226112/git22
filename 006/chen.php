<?php
$A = [5, 8, 6, 34, 22, 40, 11, 18, 23, 44];
$n = count($A);
for($i = 1; $i < $n; $i++){
    $j = $i -1;
    $t = $A[$i];
    while($t < $A[$j] && $j >= 0){
        $A[ $j + 1]=$A[$j];
        $j--;
    }
    $A [$j+1]=$t;
}
echo'<pre>';
print_r($A);
die();
