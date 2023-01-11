<?php
$A= [2, 3, 2, 5, 6, 1, -2, 3, 14, 12];
$n = count($A);
for($i = 0; $i < $n-1; $i++){
    for($j = $n-1; $j > $i ; $j--){
        if($A[$j] < $A[$j-1]){
            $t=$A[$j-1];
            $A[$j-1] = $A[$j];
            $A[$j] = $t;
        }
    }
}
echo'<pre>';
print_r($A);
die();