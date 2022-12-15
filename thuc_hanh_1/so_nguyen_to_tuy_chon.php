<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="post">
    <input type="text" name="luachon" placeholder= 'nhap so nguyen to'>
    <input type="submit" value="tim"/>
</body>
</html>
<?php
  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
   $number = $_POST['luachon'];
    $count=0;
    $countsnt=0;
for( $i = 0; $i <100;$i++){
    if(  $countsnt<$number){
    for( $j = 1; $j <=$i ;$j++){
        if($i % $j==0){
            $count+=1;
        }
    }
    if( $count== 2){
        echo $i . "<br>";
        $countsnt += 1;
    }
    $count=0;
}else{

    break;
}
}
  }



