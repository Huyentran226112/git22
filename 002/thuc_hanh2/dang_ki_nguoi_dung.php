<?php
if ( $_SERVER['REQUEST_METHOD']== 'POST') {
    $nhapten = $_REQUEST['nhapten'];
    $nhapemail = $_REQUEST['nhapemail'];
    $nhaprole = $_REQUEST['nhaprole'];
class User {
    protected string $name;
    protected string $email;
    protected int $role ;
        public function __construct($ts_name,$ts_email,$ts_role){
            $this -> name = $ts_name;
            $this -> email = $ts_email;
            $this -> role = $ts_role;
}
public function getInfo(){
    return $this -> name;
}
public function isAdmin(){
    if ($this -> role == 1){
        echo 'admin';
    }else if ($this -> role >1){
echo 'là người dùng bình thường';
    }
}
public function SetName($name){
    $this -> name = $name;
}
public function SetEmail($email){
    $this -> email = $email;
}
public function SetRole($role){
    $this -> role = $role;
}
}
$objUser =new User ($nhapten,$nhapemail,$nhaprole);
echo '<pre>';
print_r($objUser->isAdmin());
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
  <label for="fname">nhập tên người dùng </label><br>
  <input type="text" id="" name="nhapten" ><br>
  <label for="lname">nhập email</label><br>
  <input type="text" id="" name="nhapemail"><br><br>
  <label for="lname">nhập số</label><br>
  <input type="text" id="" name="nhaprole"><br><br>
  <input type="submit" value="Submit">
</form> 
</body>
</html>