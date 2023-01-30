<form class="table" action="index.php?controller=product&action=update&id=<?= $item['id'];?>" method="post">
    TENHANG :<input type="text" name="title" class="form-control" value="<?= $item['title'];?>"> <br>
    GIA BAN: <input type="text" name="price" class="form-control" value="<?= $item['price'];?>"> <br>
    SỐ LƯỢNG : <input type="text" name="quantity" class="form-control" value="<?= $item['quantity'];?>"> <br>
    MÔ TẢ: <input type="text" name="description" class="form-control" value="<?= $item['description'];?>"> <br>
    <input type="submit"class="btn btn-primary" value="sửa">
</form>
