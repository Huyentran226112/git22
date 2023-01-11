<?php
$pattern = '/^[CAP][0-9]{4,4}[GHIKLM]$/';
$subject = 'C0318G';
if (preg_match($pattern, $subject)){
    echo 'Khớp';
}else{
    echo 'Không khớp';
}
