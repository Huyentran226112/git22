<?php
    define('ROOT_URL','http://thi_m2.test/');
    define('ROOT_DIR',dirname(__FILE__));
    $username   = 'root';
    $password   = '';
    $database   = 'hoc_sinh';
    try {
        $conn = new PDO('mysql:host=localhost;dbname='.$database, $username, $password);
    } catch (Exception $e) {
        // echo $e->getMessage();
        echo '<h1>Khong the ket noi CSDL</h1>';
    }