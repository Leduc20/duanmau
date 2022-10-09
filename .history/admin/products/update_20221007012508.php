<?php
if (is_array($product)) {
    extract($product);
}
$imagepath = "../upload/" . $image;
//kiểm tra 
if (is_file($imagepath)) {
    $img = "<img src='" . $imagepath . "' width='140px'";
} else {
    $img = "No image";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <section class="mt-[-366px] ml-[99px]">
        <div class="max-w-[1200px] mx-auto">
            <div class="border bg-green-200 mt-2 rounded">
                <p class="ml-3 mt-3">Thêm mới sản phẩm</p>
            </div>
            <div>
                <form action="index.php?act=updatesp" method="post" enctype="multipart/form-data">
                    <div>
                        <div class="grid grid-cols-3 gap-8">
                            <div>
                                <input type="text" name="id_hh" id="" value="<?=$id_hh?>">
                                <select class="border w-[134px] h-[33px] rounded" name="idlh" id="">
                                <option value="0" selected></option>
                                <?php
                                foreach ($listline as $show) {
                                    if($idlh=$id_commodities){
                                        extract($show);
                                        echo '<option value="' . $id_commodities . '" selected>' . $name . '</option> ';
                                    }else{
                                        echo '<option value="' . $id_commodities . '">' . $name . '</option> ';
                                    }
                                }
                                ?>
                            </select>
                            </select>
                            </div>
                            <!-- <div>
                            <p class="font-bold mt-3 mb-2">Mã sản phẩm</p>
                            <input class="border w-full p-2 rounded-[4px]" type="text" name="" id="">
                        </div> -->
                            <div>
                                <p class="font-bold mt-3 mb-2">Tên sản phẩm</p>
                                <input class="border w-full p-2 rounded-[4px]" type="text" name="name" id="" value="<?$name?>">
                            </div>
                            <div>
                                <p class="font-bold mt-3 mb-2">Đơn giá</p>
                                <input class="border w-full p-2 rounded-[4px]" type="text" name="price" id="" value="<?= $price ?>">
                            </div>
                            <div>
                                <p class="font-bold mt-3 mb-2">Giảm giá</p>
                                <input class="border w-full p-2 rounded-[4px]" type="text" name="sale" id="" value="<?= $sale ?>">
                            </div>
                            <div>
                                <p class="font-bold mt-3 mb-2">Hình ảnh</p>
                                <input class="border w-full p-2 rounded-[4px]" type="file" name="image" id="">
                                <div>
                                    <?= $img ?>
                                </div>
                            </div>
                        </div>
                        <div>
                            <p class="font-bold mt-3 mb-2">Mô tả</p>
                            <textarea class="border" name="detail" id="" cols="49" rows="10"><?= $detail ?></textarea>
                        </div>
                    </div>
                    <div>
                        <button name="update" type="submit" class="p-2 rounded border mt-3">Cập nhật</button>
                        <button type="reset" class="p-2 rounded border mt-3">Nhập lại</button>
                        <a href="index.php?act=dshh">Danh sách</a>
                    </div>
                </form>
            </div>
        </div>
    </section>
</body>

</html>