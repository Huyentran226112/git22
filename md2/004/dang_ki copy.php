<!-- tao form gom name va age 
xu ly form
2.1
lam cac buoc trong file ly thuyet -->
<?php
        // Code PHP xử lý validate
        $error = array();
        $data = array();
        if (!empty($_POST['contact_action']))
        {
            // Lấy dữ liệu
            $data['fullname'] = isset($_POST['fullname']) ? $_POST['fullname'] : '';
            $data['email'] = isset($_POST['email']) ? $_POST['email'] : '';
            $data['content'] = isset($_POST['content']) ? $_POST['content'] : '';
 
            // Kiểm tra định dạng dữ liệu
            require('./validate.php');
            if (empty($data['fullname'])){
                $error['fullname'] = 'Bạn chưa nhập tên';
            }
 
            if (empty($data['email'])){
                $error['email'] = 'Bạn chưa email';
            }
            else if (!is_email($data['email'])){
                $error['email'] = 'Email không đúng định dạng';
            }
 
            if (empty($data['content'])){
                $error['content'] = 'Bạn chưa nhập nội dung';
            }
 
            // Lưu dữ liệu
            if (!$error){
                echo 'Dữ liệu có thể lưu trữ';
                // Code lưu dữ liệu tại đây
                // ...
            }
            else{
                echo 'Dữ liệu bị lỗi, không thể lưu trữ';
            }
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
    <form action="contact.php" method="post">
  <table cellspacing="0" cellpadding="5">
                <tr>
                    <td>Tên của bạn</td>
                    <td>
                        <input type="text" name="fullname" id="fullname" value="<?php echo isset($data['fullname']) ? $data['fullname'] : ''; ?>"/>
                        <?php echo isset($error['fullname']) ? $error['fullname'] : ''; ?>
                    </td>
                </tr>
                <tr>
                    <td>tuổi của bạn </td>
                    <td>
                        <input type="text" name="age" id="age" value="<?php echo isset($data['age']) ? $data['age'] : ''; ?>"/>
                        <?php echo isset($error['age']) ? $error['age'] : ''; ?>
                    </td>
                </tr>
                   <input type="submit" name="contact_action" value="Gửi liên hệ"/></td>
</form>              
</body>
</html>