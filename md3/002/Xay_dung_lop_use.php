<?php
class User{
    // thuoc tinh 
    protected string $name ="";
    protected string $email ="";
    public int $role ;
    // phuong thức 
    public function getInfo() {
        return $this->isAdmin()."<br>"."tên:".$this->name.'<br>'."email:".$this->email;
    }
    public function isAdmin(){
        if($this->role == 1){
            echo "Admin";
        }
        if($this->role == 2){
            echo "người dùng bình thường :";
        }
    }

    // thiet lap gia tri thuoc tinh 
    public function setName($ts_name){
        $this->name = $ts_name;
    }
    public function setEmail($ts_email){
        $this->email = $ts_email;
    }
    public function setrole($ts_role){
        $this->role = $ts_role;
    }

    // // tra ve gia tri thuoc tinh name
    // public function getName(){
    //     return $this->name;
    // }
    // // tra ve gia tri thuoc tinh email
    // public function getEmail(){
    //     return $this->email;
    // }
    // // tra ve gia tri thuoc tinh role
    // public function getrole(){
    //     return $this->role;
    // }
}

// ben ngoai
//  khoi tao doi tuong use
$user = new User();
//  goi phuong thuc thiet lap thuoc tinh name
$user->setName("tran thi huyen");
// goi phuong thuc thiet lap thuoc tinh email
$user->setEmail("tranthihuyen@gmail.com");
// goi phuong thuc thiet lap thuoc tinh role
$user->setrole(2);
// in doi tuong 
// echo '<pre>';
// print_r($user);
// echo '</pre>';
// truy xuat thuoc tinh name
// echo  $user->getName();
// echo"<br>";
// // truy xuat thuoc tinh email
// echo  $user->getEmail();
// echo"<br>";
echo $user->getInfo();




