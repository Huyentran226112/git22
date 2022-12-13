<?php
$number=[
   [12,25,36,54],
    [32,89,36,47]
];
 $sum=0;
 $thu_tu= 1;
 for($i=0;$i<count($number);$i++){
    for($j=0;$j<count($number[$i]);$j++){
        if($j== 1 ){
        $sum+=$number[$i][$j];
 }
}
 }
 echo $sum; 