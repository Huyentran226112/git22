<?php
if ( $_SERVER['REQUEST_METHOD']== 'POST') {
    $ho = $_REQUEST['ho'];
    $ten = $_REQUEST['ten'];
    $ngay_sinh = $_REQUEST['ngay_sinh'];
    $dia_chi = $_REQUEST['dia_chi'];
    $cong_viec = $_REQUEST['cong_viec'];
class Employee{
    // thuoc tinh 
    public $ho = "";
    public $ten = "";
    public string $ngay_sinh = "";
    public $dia_chi = "";
    public $cong_viec = "";
    public function __construct($ho,$ten,$ngay_sinh,$dia_chi,$cong_viec){
        $this->ho = $ho;
        $this->ten = $ten;
        $this->ngay_sinh = $ngay_sinh;
        $this->dia_chi = $dia_chi;
        $this->cong_viec = $cong_viec;
    }
    public function getInfo(){
        return [
            "ho" => $this->getho(),
            "ten" => $this->getten(),
            "ngay_sinh"=>$this->getngay_sinh(),
            "dia_chi"=>$this->getdia_chi(),
            "cong_viec"=>$this->getcong_viec()
        ];
    }
    public function getho(){
        return $this->ho;
    }
    public function getten(){
        return $this->ten;
    }
    public function getngay_sinh(){
        return $this->ngay_sinh;
    }
    public function getdia_chi(){
        return $this->dia_chi;
    }
    public function getcong_viec(){
        return $this->cong_viec;
    }
}
$objEmployee =new Employee ($ho,$ten,$ngay_sinh,$dia_chi,$cong_viec);
echo '<pre>';
print_r($objEmployee);
echo '</pre>';
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
<form action="" method="post">
  <label for="fname">Họ</label><br>
  <input type="text" id="" name="ho" ><br>
  <label for="fname">Tên</label><br>
  <input type="text" id="" name="ten" ><br>
  <label for="fname">Ngày sinh</label><br>
  <input type="date" id="" name="ngay_sinh" ><br>
  <label for="fname">Địa chỉ</label><br>
  <input type="text" id="" name="dia_chi" ><br>
  <label for="fname">Vị trí công việc</label><br>
  <input type="text" id="" name="cong_viec" ><br>
  <input type="submit" value="Submit">
</form> 

</body>
</html>