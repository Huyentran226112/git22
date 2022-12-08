<?php
 $money = false;
$quan_open = false;
$cho_no = true;
if( $quan_open && ($cho_no || $money)){
    echo('ban duoc nhau');
}else{
    echo('ban phai ve nha');
}j