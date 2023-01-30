<form action="index.php?controller=product&action=update&id=<?= $item['id'];?>" method="post">
    TENHANG :<input type="text" name="name" value="<?= $item['name'];?>"> <br>
    GIA BAN: <input type="text" name="price" value="<?= $item['price'];?>"> <br>
    SỐ LƯỢNG : <input type="text" name="quantity" value="<?= $item['quantity'];?>"> <br>
    ẢNH: <input type="text" name="image" value="<?= $item['image'];?>"> <br>
    THỂ LOẠI: <input type="text" name="category_id" value="<?= $item['category_id'];?>"> <br>
    MÔ TẢ: <input type="text" name="description" value="<?= $item['description'];?>"> <br>
    TRẠNG THÁI: <input type="text" name="status" value="<?= $item['status'];?>"> <br>
    <input type="submit" value="Them">
</form>
