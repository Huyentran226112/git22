<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="myCss.css" type="text/css">
</head>
<body>
<h1>Truyện cười</h1>
<h5><a href="index.php?page=fun1">Ăn nói khoan thai</a></h5>
<h5><a href="index.php?page=fun2">Thầy trò đường tăng</a></h5>
<h5><a href="index.php?page=fun3">Mất trộm bò</a></h5>
<h5><a href="index.php?page=fun4">Trả nợ anh lái đò</a></h5>
<?php
$page = $_REQUEST["page"] ?? null;

switch ($page) {
    case "fun1";
        include "Comic/fun1.php";
        break;
    case "fun2";
        include "Comic/fun2.php";
        break;
    case "fun3";
        include "Comic/fun3.php";
        break;
    case "fun4";
        include "Comic/fun4.php";
        break;
}
?>
</body>
</html>