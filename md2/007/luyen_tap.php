<?php
  function findMin($age){
    if ($age>=18 ){
        return true;
    }else{
        throw new Exception("ban phai du 18 tuoi de thuc hien chuc nang nay ");
    }
  }
try {
    findMin(age:19);
    echo "ban co the su dung chuc nang nay";
}catch(Exception $e){
    echo $e->getMessage();
}

