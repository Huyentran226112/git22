<form action="index.php?controller=categorie&action=update&id=<?= $item['id'];?>" method="post">
    TENHANG :<input type="text" name="name" class="form-control" value="<?= $item['name'];?>"> <br>
    MÔ TẢ: <input type="text" name="address"class="form-control" value="<?= $item['address'];?>"> <br>
    <input type="submit"class="btn btn-primary" value="sửa">
</form>