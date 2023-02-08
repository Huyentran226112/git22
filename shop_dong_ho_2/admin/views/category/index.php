<div class="container-fluid px-4"><br>
<a class="btn btn-primary"   href="index.php?controller=category&action=create"> Thêm mới </a>  
<table border="1" class="table">
    <thead>
        <tr>
            <th>STT</th>
            <th>TÊN HÀNG</th>
            <th>CÔNG CỤ</th>
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
                <td> <?php echo ++$key;?>  </td>
                <td><?php echo $row['name'];?></td>
                </td>
                <td>
                    <a class="btn btn-warning" href="index.php?controller=category&action=edit&id=<?= $row['id'] ;?>">SỬA</a>
                    <a class="btn btn-danger" href="index.php?controller=category&action=destroy&id=<?= $row['id'] ;?>">XÓA</a>
                </td>
                
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
