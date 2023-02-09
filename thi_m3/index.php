<?php  

if( isset( $_REQUEST['controller'] ) ){
    $controller = $_REQUEST['controller'];
}else{
    $controller = 'Student';
}
if( isset( $_REQUEST['action'] ) ){
    $action = $_REQUEST['action'];
}else{
    $action = 'index';
}
include_once 'controllers/Controller.php';
// Quyết định gọi controller nào dựa vào biến controller
switch ($controller) {
    case 'Student':
        include_once 'controllers/StudentControllers.php';
        $objController = new StudentControllers();
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