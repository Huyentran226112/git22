<?php
if($_SERVER["REQUEST_METHOD"] =="POST"){
  $a=$_POST["Inventment_Amount"];
  $b=$_POST["Yearly_Interest_Rate"]/100;
  $c=$_POST["Number_of_Years"];
  // $gh=0;
  $ket_qua=$a;
  for ($i = 0; $i < $c; $i++) {
    $ket_qua += $a * $b;
}
echo $ket_qua;
}
?>
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
    <input type="text" name="Inventment_Amount" placeholder='lượng tiền '>
    <input type="text" name="Yearly_Interest_Rate" placeholder='lãi xuất năm'>
    <input type="text" name="Number_of_Years" placeholder='số năm  '><br>
    <input type="submit" value=" Calculate "/>
</form>
</body>
</html>