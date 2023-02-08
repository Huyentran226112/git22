<form action="index.php?controller=order&action=update&id=<?= $item['id'];?>" method="post">
NGÀY ĐẶT HÀNG :<input type="date"class="form-control" name="order_date" value="<?= $item['order_date'];?>"> <br>
TỔNG TIỀN: <input type="text"class="form-control" name="total" value="<?= $item['total'];?>"> <br>
TÊN KHÁCH HÀNG : <input type="text" class="form-control"name="cutstomer_name" value="<?= $item['cutstomer_name'];?>"> <br>
SỐ ĐIỆN THOẠI : <input type="text"class="form-control" name="cutstomer_phone" value="<?= $item['cutstomer_phone'];?>"> <br>
ĐỊA CHỈ: <input type="text"class="form-control" name="cutstomer_address" value="<?= $item['cutstomer_address'];?>"> <br>
    <input type="submit"class="btn btn-primary"  value="Them">
</form>
