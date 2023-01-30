<form action="index.php?controller=blog&action=update&id=<?= $item['id'];?>" method="post">
    TENHANG :<input type="text" name="title" class="form-control" value="<?= $item['title'];?>"> <br>
    MÔ TẢ: <input type="text" name="description"class="form-control" value="<?= $item['description'];?>"> <br>
    <input type="submit"class="btn btn-primary" value="sửa">
</form>