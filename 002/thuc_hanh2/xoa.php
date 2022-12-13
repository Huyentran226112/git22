<?php
$number=[ 10,6,7,8,2];
$x=7;
for($i=0;$i<count($number);$i++){
    if($number[$i]==$x){
        unset($number[$i]);
    }
}
echo '<pre>';
print_r($number);
echo '</pre>';



