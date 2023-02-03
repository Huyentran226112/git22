<?php
include_once 'models/Blog.php';
class BlogController{
    // goi toi trang danh sach 
    public function index(){
        //  goi toi model
        $objblogs = new Blog();
        // model thao tac voi CSDL tra ve controller 
        $items = $objblogs->all();
        // var_dump($items);
        // die();
        // truyen du lieu xuong view
        include_once 'views/blogs/index.php';
    }
    // goi toi trang them moi 
    public function create(){
        // echo __METHOD__;

        include_once 'views/blogs/create.php';
    }
    // xu li them moi
    public function store(){
        // echo '<pre>';
        // print_r($_REQUEST);
        // die();
        // lay du lieu tu $_REQUEST gan vao mang data 
        $data = [
            'title' => $_REQUEST['title'],
            'description' => $_REQUEST['description'],
        ];
        // goi model 
        $objblogs = new Blog();
        $objblogs->save($data);
        // chuyen huowng ve trang danh sach
        header("location: index.php?controller=blog&action=index.php");
        die();
    }

    // Gọi tới trang chỉnh sửa
    public function edit(){
        $id = $_REQUEST['id'];
        // Gọi model
        $objblogs = new Blog();
        $item = $objblogs->find($id);
        // truyen xuong view
        include_once 'views/blogs/edit.php';
    }

    // Xử lý chỉnh sửa
    public function update(){
        // echo '<pre>';
        // print_r($_REQUEST);
        // die();

        $id = $_REQUEST['id'];
        // Lấy dữ liệu từ _REQUEST gán vào mảng data
        $data = [
            'title' => $_REQUEST['title'],
            'description' => $_REQUEST['description'],
        ];
        // Gọi model
        $objblogs = new Blog();
        $objblogs->update($id,$data);

        // Chuyển hướng về trang danh sách
        header("Location: index.php?controller=blog&action=index");
        die();
    }

    public function destroy(){
        $id = $_REQUEST['id'];
        // Gọi model
        $objblogs = new Blog();
        $objblogs->delete($id);

        // Chuyển hướng về trang danh sách
        header("Location: index.php?controller=blog&action=index ");
        die();
    }
}