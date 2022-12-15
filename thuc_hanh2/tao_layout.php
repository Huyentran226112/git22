<?php  include("header1.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Using include in php</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="container">
    <header><?php include "header1.php"; ?></header>
    <nav><?php include "nav.php"; ?></nav>
    <article><?php include "content1.php"; ?></article>
    <footer><?php include "footer1.php"; ?></footer>
</div>
</body>
</html>