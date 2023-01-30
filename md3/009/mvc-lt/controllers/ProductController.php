<?php
include_once 'models/Product.php';
class ProductController{
    // goi toi trang danh sach 
    public function index(){
        //  goi toi model
        $objProduct = new Product();
        // model thao tac voi CSDL tra ve controller 
        $items = $objProduct->all();
        // var_dump($items);
        // die();
        // truyen du lieu xuong view
        include_once 'views/products/index.php';
    }
    // goi toi trang them moi 
    public function create(){
        // echo __METHOD__;

        include_once 'views/products/create.php';
    }
    // xu li them moi
    public function store(){
        // echo '<pre>';
        // print_r($_REQUEST);
        // die();
        // lay du lieu tu $_REQUEST gan vao mang data 
        $data = [
            'name' => $_REQUEST['name'],
            'price' => $_REQUEST['price'],
            'quantity' => $_REQUEST['quantity'],
            'category_id' => $_REQUEST['category_id'],
            'image' => $_REQUEST['image'],
            'description' => $_REQUEST['description'],
            'status' => $_REQUEST['status'],
        ];
        // goi model 
        $objProduct = new Product();
        $objProduct->save($data);
        // chuyen huowng ve trang danh sach
        header("location: index.php?controller=product&action=index.php");
        die();
    }

    // Gọi tới trang chỉnh sửa
    public function edit(){
        $id = $_REQUEST['id'];
        // Gọi model
        $objProduct = new Product();
        $item = $objProduct->find($id);
        // truyen xuong view
        include_once 'views/products/edit.php';
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
            'price' => $_REQUEST['price'],
            'quantity' => $_REQUEST['quantity'],
            'category_id' => $_REQUEST['category_id'],
            'image' => $_REQUEST['image'],
            'description' => $_REQUEST['description'],
            'status' => $_REQUEST['status'],
        ];
        // Gọi model
        $objProduct = new Product();
        $objProduct->update($id,$data);

        // Chuyển hướng về trang danh sách
        header("Location: index.php?controller=product&action=index ");
        die();
    }

    public function destroy(){
        $id = $_REQUEST['id'];
        // Gọi model
        $objProduct = new Product();
        $objProduct->delete($id);

        // Chuyển hướng về trang danh sách
        header("Location: index.php?controller=product&action=index ");
        die();
    }
}