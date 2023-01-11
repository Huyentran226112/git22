<?php
include_once 'DongHa/Tam.php';
include_once 'GioLinh/Tam.php';

// Su dung
use DongHa\Tam;
use GioLinh\Tam as TamGL;//ten lop trung nhau

// Khong use
$objTamDongHa = new DongHa\Tam();//new <namespace>\<className>
$objTamGioLinh = new GioLinh\Tam();

// Khoi tao binh thuong sau khi use
$objTam = new Tam();
$objTamGL = new TamGL();

echo '<pre>';
print_r($objTamDongHa);
print_r($objTamGioLinh);
print_r($objTam);
print_r($objTamGL);
echo '</pre>';