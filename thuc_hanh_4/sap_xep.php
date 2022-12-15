<?php
$A=[1, 9, 4.5, 6.6, 5.7, -4.5];
$n=count($A);
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