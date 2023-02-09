<div class="container-fluid px-4"><br>
    <a class="btn btn-primary" href="index.php?controller=Student&action=create"> Thêm mới </a>
    <table border="1" class="table">
        <thead>
            <tr>
                <th>MÃ HỌC SINH</th>
                <th>TÊN HỌC SINH</th>
                <th>LỚP</th>
                <th>NGÀY SINH</th>
                <th>GIỚI TÍNH</th>
                <th>THÔNG TIN HỌC SINH</th>
                <th>CÔNG CỤ</th>
            </tr>
        </thead>
        <tbody>
            </td>
            <?php foreach( $items as $key => $row ): 
            // echo '<pre>';
            // print_r($items);
            // die();
            ?>
            <tr>
                <td> <?php echo ++$key;?> </td>
                <td><?php echo $row['ten_hoc_sinh'];?></td>
                <td><?php echo $row['lop'];?></td>
                <td><?php echo $row['ngay_sinh'];?></td>
                <td><?php
									if ($row['gioi_tinh'] == 0) {
										echo 'nam';
									} else {
										echo 'nữ';
									}
									?></td>
                <td><?php echo $row['thong_tin_hoc_sinh'];?></td>
                </td>
                <td>
                    <a class="btn btn-warning"
                        href="index.php?controller=Student&action=edit&id=<?= $row['id'] ;?>">Edit</a>
                    <a class="btn btn-danger" onclick="return confirm('Bạn có chắc chắn muốn xóa không?')"
                        href="index.php?controller=Student&action=destroy&id=<?= $row['id'] ;?>">Delete</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>