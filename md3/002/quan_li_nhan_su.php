<?php

include_once 'Employee/Employee.php';
include_once 'EmployeeManage/EmployeeManager.php';
use Employee\Employee;
use EmployeeManage\EmployeeManager;
$phong = new Employee('nguyen','phong','1997','quang tri','lap trinh');
$nho = new Employee('nguyen','phong','1997','quang tri','lap trinh');
$huyen = new Employee('nguyen','phong','1997','quang tri','lap trinh');
EmployeeManager::new($phong);
EmployeeManager::new($nho);
EmployeeManager::new($huyen);
echo '<pre>';
print_r(EmployeeManager::list());
echo '</pre>';
?>