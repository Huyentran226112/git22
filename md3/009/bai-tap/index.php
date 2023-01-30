<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
<?php 
// $controller = new ProductController();
// $controller->index();
// index.php?action=index
// index.php?action=create
// echo '<pre>'; 
// print_r($_REQUEST);
// die();
// Kiểm tra tồn tại chỉ số action trong mảng $_REQUEST
if( isset( $_REQUEST['controller'] ) ){
    $controller = $_REQUEST['controller'];
}else{
    $controller = 'product';
}
if( isset( $_REQUEST['action'] ) ){
    $action = $_REQUEST['action'];
}else{
    $action = 'index';
}
// Quyết định gọi controller nào dựa vào biến controller
switch ($controller) {
    case 'product':
        include_once 'controller/ProductController.php';
        $objController = new ProductController();
        break;
    case 'blog':
        include_once 'controller/BlogController.php';
        $objController = new BlogController();
        break;
    default:
        # code...
        break;
}
// var_dump($controller);
// var_dump($action);

// Quyết định gọi action nào dựa vào biến action
switch ($action) {
    // Hiển thị trang danh sách
    case 'index':
        $objController->index();
        break;
    // Hiển thị form thêm mới
    case 'create':
        $objController->create();
        break;
    // Xử lý thêm mới
    case 'store':
        $objController->store();
        break;
    // Hiển thị form chỉnh sửa
    case 'edit':
        $objController->edit();
        break;
    // Xử lý chỉnh sửa
    case 'update':
        $objController->update();
        break;
    // Hiển thị trang xóa
    case 'edit':
        $objController->edit();
        break;
     // Xử lý xóa
    case 'destroy':
        $objController->destroy();
        break;
    default:
        $objController->index();
        break;
}