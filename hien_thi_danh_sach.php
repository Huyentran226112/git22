<?php

$customerList = [
    "1" => [
            "ten" => "Mai Văn Hoàn",
            "ngaysinh" => "1983-08-20",
            "diachi" => "Hà Nội",
            "anh" => "images/img1.jpg"
    ],
    "2" => [
            "ten" => "Nguyễn Văn Nam",
            "ngaysinh" => "1983-08-20",
            "diachi" => "Bắc Giang",
            "anh" => "images/img2.jpg"
    ],
    "3" => [
            "ten" => "Nguyễn Thái Hòa",
            "ngaysinh" => "1983-08-21",
            "diachi" => "Nam Định",
            "anh" => "ihttps://catscanman.net/wp-content/uploads/2021/09/anh-meo-cute-de-thuong-34.jpg"
    ],
    "4" => [
            "ten" => "Trần Đăng Khoa",
            "ngaysinh" => "1983-08-22",
            "diachi" => "Hà Tây",
            "anh" => "https://ben.com.vn/tin-tuc/wp-content/uploads/2021/12/anh-che-meo-dang-yeu-cho-may-tinh-6.jpg"
    ],
    "5" => [
            "ten" => "Nguyễn Đình Thi",
            "ngaysinh" => "1983-08-17",
            "diachi" => "Hà Nội",
            "anh" => "https://i.pinimg.com/550x/e4/21/92/e42192b0682ede9d80d92260fb5e17cd.jpg"
    ]
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    table {
            border-collapse: collapse;
            width: 100%;
        }

        th, td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
    </style>
</head>
<body>
    <table>
    <caption><h1>DANH SACH KHACH HANG </h1></caption>
    <thead>
        <tr>
            <th>STT</th>
            <th>TEN</th>
            <th>NGAY SINH </th>
            <th>DIA CHI</th>
            <th>ANH</th>
        </tr>
    </thead>
    <tbody>

    <?php foreach ($customerList as $key => $value): ?>
    <tr>
        <td><?php echo $key ?></td>
        <td><?php echo $value['ten'] ?></td>
        <td><?php echo $value['ngaysinh'] ?></td>
        <td><?php echo $value['diachi'] ?></td>
        <td><img src="<?php echo $value['anh'] ?>" alt="" width="200"></td>
    </tr>
<?php endforeach; ?>
    </tbody>
    </table>
</body>
</html>
