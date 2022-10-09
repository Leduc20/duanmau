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
                <form action="index.php?act.addhh" enctype="multipart/form-data">
                    <div class="grid grid-cols-3 gap-8">
                        <div>
                            <p class="font-bold mt-3 mb-2">Mã sản phẩm</p>
                            <input class="border w-full p-2 rounded-[4px]" type="text" name="" id="">
                        </div>
                        <div>
                            <p class="font-bold mt-3 mb-2">Tên sản phẩm</p>
                            <input class="border w-full p-2 rounded-[4px]" type="text" name="name" id="">
                        </div>
                        <div>
                            <p class="font-bold mt-3 mb-2">Đơn giá</p>
                            <input class="border w-full p-2 rounded-[4px]" type="text" name="price" id="">
                        </div>
                        <div>
                            <p class="font-bold mt-3 mb-2">Giảm giá</p>
                            <input class="border w-full p-2 rounded-[4px]" type="text" name="sale" id="">
                        </div>
                        <div>
                            <p class="font-bold mt-3 mb-2">Hình ảnh</p>
                            <input class="border w-full p-2 rounded-[4px]" type="file" name="image" id="">
                        </div>
                        <div>
                            <p class="font-bold mt-3 mb-2">Mô tả</p>
                            <textarea class="border" name="detail" id="" cols="49" rows="10"></textarea>
                        </div>
                        <div>
                            <p class="font-bold mt-3 mb-2">Loại hàng</p>
                            <select class="border w-[382px] h-[45px] rounded" name="idlh" id="">
                                <?php 
                                foreach ($listline as $line) {
                                    extract($line);
                                     echo '<option value=''></option> ';
                                }
                                ?>
                                <!-- <option value="">Đồng hồ</option> -->
                            </select>
                        </div>
                        <!-- <div>

                            <p class="font-bold mt-3 mb-2">Hàng đặc biệt</p>
                            <div class="border h-[48px] w-[382px]">
                                <div class="mt-[10px] ml-[20px]">
                                    <input class="form-check-input" type="radio" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        Đặc biệt
                                    </label>
                                    <input class="form-check-input" type="radio" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        Bình thường
                                    </label>
                                </div>
                            </div>
                        </div> -->
                        <!-- <div>
                            <p class="font-bold mt-3 mb-2">Ngày nhập</p>
                            <input class="border w-full p-2 rounded-[4px]" type="text" name="" id="">
                        </div> -->
                        <!-- <div>
                            <p class="font-bold mt-3 mb-2">Số lượt xem</p>
                            <input class="border w-full p-2 rounded-[4px]" type="text" name="" id="">
                        </div> -->

                    </div>
                    <a href="index.php?act=addhh" name="themmoi" type="submit" class="p-2 rounded border mt-3">Thêm mới</a>
                    <button type="submit" class="p-2 rounded border mt-3">Nhập lại</button>
                    <a href="index.php?act=dshh">Danh sách</a>
                </form>
            </div>
        </div>
    </section>
</body>

</html>