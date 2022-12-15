<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    if($_SERVER['REQUEST_METHOD']=='POST'){
        $number_1=$_POST['so1'];
        $number_2=$_POST['so2'];
        $tinh=$_POST['tinhtoan'];
        

        if($number_1==""||$number_2==""){
            echo "bạn cần nhập đủ 2 số để thực hiện phép tính";
        }else{
        $tong=$number_1+$number_2;
        $hieu=$number_1-$number_2;
        $tich=$number_1*$number_2;
            if($tinh=='cong'){
                echo $number_1.'+'.$number_2.'='.$tong;
            }else if($tinh=='tru'){
                echo $number_1.'-'.$number_2.'='.$hieu;
            }else if($tinh=='nhan'){
                echo $number_1.'*'.$number_2.'='.$tich;
            }else if($tinh=='chia'){
                if($number_2==0){
                    echo "mẫu số phải khác 0";
                }else{
                    $thuong=$number_1/$number_2;
                    echo $number_1.'/'.$number_2.'='.$thuong;
                }
            }
        }
        
    }
    ?>
    <form method="post">
        Simple Calculator<br>
            first operand:
        <input type="text" value="" name='so1'><br>
            Operator:
        <select name='tinhtoan'>
            <option value='cong'>cộng</option>
            <option value='tru'>trừ</option>
            <option value='nhan'>nhân</option>
            <option value='chia'>chia</option>
        </select><br>
            second operand:
        <input type="text" value="" name = 'so2'><br>
        <input type="submit" value="tính">
    </form>
</body>
</html>