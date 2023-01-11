<?php
$pattern = '/^\(84\)\-\([0-9]{10,10}\)$/';
$subject = '(54)-(0978489648)';
if (preg_match($pattern, $subject)){
    echo 'Khớp';
}else{
    echo 'Không khớp';
}