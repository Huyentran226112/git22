<?php
const CONG = 'CONG_HAI_SO';
const TRU = 'TRU_HAI_SO';
const NHAN = 'NHAN_HAI_SO';
const CHIA = 'CHIA_HAI_SO';
include_once "Calculator.php";

$calculator = new Calculator();
echo $calculator->calculate(1,2, 'TRU');
echo "<br>";
echo $calculator->calculate(1,2, 'CONG');
echo "<br>";
echo $calculator->calculate(1,2, 'NHAN');
echo "<br>";
echo $calculator->calculate(1,0, 'CHIA');