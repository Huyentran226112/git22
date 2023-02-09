<?php
include_once 'models/Student.php';
class StudentControllers extends Controller{
    // goi toi trang danh sach 
    public function index(){
        //  goi toi model
        $objstudent = new Student();
        // model thao tac voi CSDL tra ve controller 
        $items = $objstudent->all();
        // var_dump($items);
        // die();
        // truyen du lieu xuong view
        $params = [
            'items' => $items
        ];
        $this->view('students/index.php',$params);
    }
    // goi toi trang them moi 
    public function create(){
        // echo __METHOD__;

        $this->view('students/create.php');
    }
    // xu li them moi
    public function store(){
        // echo '<pre>';
        // print_r($_REQUEST);
        // die();
        // lay du lieu tu $_REQUEST gan vao mang data 
        $data = [
            'ten_hoc_sinh' => $_REQUEST['ten_hoc_sinh'],
            'lop' => $_REQUEST['lop'],
            'ngay_sinh' => $_REQUEST['ngay_sinh'],
            'gioi_tinh' => $_REQUEST['gioi_tinh'],
            'thong_tin_hoc_sinh' => $_REQUEST['thong_tin_hoc_sinh']
        ];
        // goi model 
        $objstudent = new Student();
        $objstudent->save($data);
        // chuyen huowng ve trang danh sach
        $this->redirect('index.php?controller=Student&action=index');
    }

    // Gọi tới trang chỉnh sửa
    public function edit(){
        $id = $_REQUEST['id'];
        // Gọi model
        $objstudent = new Student();
        $item = $objstudent->find($id);
        // truyen xuong view
        include_once 'views/students/edit.php';
    }

    // Xử lý chỉnh sửa
    public function update(){
        // echo '<pre>';
        // print_r($_REQUEST);
        // die();

        $id = $_REQUEST['id'];
        // Lấy dữ liệu từ _REQUEST gán vào mảng data
        $data = [
            'ten_hoc_sinh' => $_REQUEST['ten_hoc_sinh'],
            'lop' => $_REQUEST['lop'],
            'ngay_sinh' => $_REQUEST['ngay_sinh'],
            'gioi_tinh' => $_REQUEST['gioi_tinh'],
            'thong_tin_hoc_sinh' => $_REQUEST['thong_tin_hoc_sinh']
        ];
        // Gọi model
        $objstudent = new Student();
        $objstudent->update($id,$data);

        // Chuyển hướng về trang danh sách
        $this->redirect('index.php?controller=Student&action=index');
    }

    public function destroy(){
        $id = $_REQUEST['id'];
        // Gọi model
        $objstudent = new Student();
        $objstudent->delete($id);

        // Chuyển hướng về trang danh sách
        $this->redirect('index.php?controller=Student&action=index');
    }
}