<?php
if($_SERVER["REQUEST_METHOD"] =="POST"){
    $a=$_POST["san_pham"];
    $b=$_POST["gia_niem_yet"];
    $c=$_POST["chiet_khau"];
    $gh=0;
    $ket_qua = $b * $c*0.1;
     echo $ket_qua;
}
?>