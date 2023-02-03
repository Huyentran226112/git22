<form action="index.php?controller=product&action=update&id=<?= $item['id'];?>" method="post">
    TÊN HÀNG :<input type="text" class="form-control" name="name" value="<?= $item['name'];?>"> <br>
   GIÁ BÁN: <input type="text" class="form-control"name="price" value="<?= $item['price'];?>"> <br>
    SỐ LƯỢNG : <input type="text" class="form-control" name="quantity" value="<?= $item['quantity'];?>"> <br>
    THỂ LOẠI: <input type="text" class="form-control" name="category_id" value="<?= $item['category_id'];?>"> <br>
    ẢNH: <input type="text"class="form-control" name="image" value="<?= $item['image'];?>"> <br>
    MÔ TẢ: <input type="text" class="form-control"name="description" value="<?= $item['description'];?>"> <br>
    TRẠNG THÁI: <input type="text"class="form-control" name="status" value="<?= $item['status'];?>"> <br>
    <input type="submit"class="btn btn-primary"  value="Them">
</form>