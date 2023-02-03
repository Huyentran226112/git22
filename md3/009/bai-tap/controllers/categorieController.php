<?php
include_once 'models/Categorie.php';
class CategorieController{
    // goi toi trang danh sach 
    public function index(){
        //  goi toi model
        $objCategories= new Categorie();
        // model thao tac voi CSDL tra ve controller 
        $items = $objCategories->all();
        // var_dump($items);
        // die();
        // truyen du lieu xuong view
        include_once 'views/categories/index.php';
    }
    // goi toi trang them moi 
    public function create(){
        // echo __METHOD__;

        include_once 'views/categories/create.php';
    }
    // xu li them moi
    public function store(){
        // echo '<pre>';
        // print_r($_REQUEST);
        // die();
        // lay du lieu tu $_REQUEST gan vao mang data 
        $data = [
            'name' => $_REQUEST['name'],
            'address' => $_REQUEST['address'],
        ];
        // goi model 
        $objCategories = new Categorie();
        $objCategories->save($data);
        // chuyen huowng ve trang danh sach
        header("location: index.php?controller=categorie&action=index.php");
        die();
    }

    // Gọi tới trang chỉnh sửa
    public function edit(){
        $id = $_REQUEST['id'];
        // Gọi model
        $objCategories = new Categorie();
        $item = $objCategories->find($id);
        // truyen xuong view
        include_once 'views/categories/edit.php';
    }

    // Xử lý chỉnh sửa
    public function update(){
        // echo '<pre>';
        // print_r($_REQUEST);
        // die();

        $id = $_REQUEST['id'];
        // Lấy dữ liệu từ _REQUEST gán vào mảng data
        $data = [
            'name' => $_REQUEST['name'],
            'address' => $_REQUEST['address'],
        ];
        // Gọi model
        $objCategories = new Categorie();
        $objCategories->update($id,$data);

        // Chuyển hướng về trang danh sách
        header("Location: index.php?controller=categorie&action=index");
        die();
    }

    public function destroy(){
        $id = $_REQUEST['id'];
        // Gọi model
        $objCategories = new Categorie();
        $objCategories->delete($id);

        // Chuyển hướng về trang danh sách
        header("Location: index.php?controller=categorie&action=index ");
        die();
    }
}