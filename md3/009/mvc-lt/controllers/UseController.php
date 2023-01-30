<?php
include_once 'models/User.php';
class ProductController{
    // goi toi trang danh sach 
    public function index(){
        //  goi toi model
        $users = new users();
        // model thao tac voi CSDL tra ve controller 
        $items = $users->all();

        // truyen du lieu xuong view
        include_once 'views/users/list.php';
    }
}