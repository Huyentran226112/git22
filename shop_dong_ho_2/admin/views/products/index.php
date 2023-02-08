
<div class="container-fluid px-4"><br>
<a class="btn btn-primary"   href="index.php?controller=product&action=create"> Thêm mới </a>  
<table border="1" class="table">
    <thead>
        <tr>
            <th>STT</th>
            <th>TÊN HÀNG</th>
            <th>GIÁ BÁN</th>
            <th>SỐ LƯỢNG</th>
            <th>THỂ LOẠI</th>
            <th>ẢNH</th>
            <th>TRẠNG THÁI</th>
            <th>CÔNG CỤ </th>
           
        </tr>
    </thead>
    <tbody>
    </td>
    <?php foreach( $items as $key => $row ): 
            // echo '<pre>';
            // print_r($row);
            // die();
            ?>
            <tr>
                <td> <?php echo $row['id'];?></td>
                <td><?php echo $row['name'];?></td>
                <td><?php echo number_format($row['price']);?>VNĐ</td>
                <td><?php echo $row['quantity'];?></td>
                <td><?php echo $row['category_name'];?></td>
                <td><img src="http://localhost/SHOP_DONG_HO_2/admin/<?php echo $row['image']?>" width="80"></td>
                <td><?php
									if ($row['status'] == 0) {
										echo 'Tắt';
									} else {
										echo 'Bật';
									}
									?></td>
                <td>
                    <a class="btn btn-warning"  href="index.php?controller=product&action=edit&id=<?= $row['id'] ;?>">SỬA</a> <br>
                    <a  class="btn btn-danger"onclick="return confirm('Bạn có chắc chắn muốn xóa không?')" href="index.php?controller=product&action=destroy&id=<?= $row['id'] ;?>">XÓA</a>
                </td>
                
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>


