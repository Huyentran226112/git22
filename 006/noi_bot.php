<?php
$A = [5,8,7,8,2,4,6];
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