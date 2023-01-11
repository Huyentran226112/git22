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
    $number=[
        "0"=>"zero",
        "1"=>"one",
        "2"=>"two",
        "3"=>"three",
        "4"=>"four",
        "5"=>"five",
        "6"=>"six",
        "7"=>"seven",
        "8"=>"eight",
        "9"=>"nine",
    ];
    $hangcam=[
        "10"=>"ten",
        "11"=>"eleven",
        "12"=>"twelve",
        "13"=>"thirteen",
        "14"=>"forteen",
        "15"=>"fifteen",
    ];
    $hangchuc =[
        "10"=>"ten",
        "20"=>"twenty",
        "30"=>"thirty",
        "40"=>"forty",
        "50"=>"fifty",
        "60"=>"sixty",
        "70"=>"seventy",
        "80"=>"eighty",
        "90"=>"ninety",

    ];
    
    if($_SERVER['REQUEST_METHOD']=="POST"){
            $nhap=$_REQUEST['search'];
                switch($nhap){
                    case $nhap<10 && $nhap>0: 
                        echo $number[$nhap];
                        break;
                    case $nhap>=10 && $nhap<16:
                        echo $hangcam[$nhap];
                        break;
                    case $nhap>=16 && $nhap<=19:
                        $chuc=$nhap-10;
                        echo $number[$chuc]."teen";
                        break;
                    case $nhap<100:
                        $chuc=(int)($nhap/10)*10;
                        $donvi=$nhap-$chuc;
                        echo $hangchuc[$chuc]."-".$number[$donvi];
                        break;
                    case $nhap<1000:
                        $hangtram=(int)($nhap/100);
                        $hangchuc2=$nhap-($hangtram*100);
                        $hangchuc1=(int)($hangchuc2/10)*10;
                        $donvi=$nhap-($hangtram*100)-$hangchuc1;
                        if($hangchuc2<10){
                            echo $number[$hangtram]."hundred"."-".$number[$donvi];
                        }else if($hangchuc2>10 && $hangchuc2<15){
                            
                        }else if($donvi==0){
                            echo $number[$hangtram]."hundred"."-".$hangchuc[$hangchuc1];
                        }
                        else{

                            echo $number[$hangtram]."hundred"."-".$hangchuc[$hangchuc1]."-".$number[$donvi];
                        };
                       
                        break;
                
                }
              
                
            }




    ?>
    <form action="" method="post">

        <input type="text" name="search" placeholder="Nhap so can chuyen"/>
        <input type="submit" value="tim" name="k"/>
    </form>
</body>
</html>