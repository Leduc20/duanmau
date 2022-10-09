<body onload="loadAnh()" class="px-2">


    <section class="max-w-full">
        <div class="md:block mx-auto md:w-[1200px]">
            <div class="md:flex justify-between mt-3 md:border-b-2 font-bold">
                <p class="text-[20px]">
                    SẢN PHẨM BÁN CHẠY
                </p>
                <!-- <p class="hidden md:block">
                    <a class="text-[#0088CC]" href="">XEM TẤT CẢ</a>
                </p> -->
            </div>
            <!-- Product -->
            <?php foreach ($showProducts as $show) {
                extract($show);
                echo '<div class="flex justify-between grid grid-cols-1 gap-4 md:grid-cols-4 md:gap-6 mt-5">
                <div class="Myhover border-[1px] hover:border-[1px] hover:border-orange-600 rounded-[5px] p-4">
                    <a href=""><img class="w-full md:w-[260px]" src="../image/iphone 12 pro max.jpg" alt=""></a>
                    <p class="text-[19px] mt-3">
                        '.$name_pro.'
                    </p>
                    
                    <div class="text-[16px] font-bold">
                        <label class="line-through text-slate-500">'.$sale.'VNĐ</label><label class=" text-red-600" for="">'.$price.'VNĐ</label>
                    </div>
                    <div class="cart border-[2px] border-black hover:bg-red-400 hover:text-white text-center mt-3 ">
                        <a class="no-underline text-black" href="detail.php?id=>">Mua Ngay</a>
                    </div>
                    <div class="hoverproduct">
                        <a class="text-red-500 no-underline" href="">Xem nhanh</a>
                    </div> 
                </div>
            </div>';
            }
            
            ?>
            <!-- <div class="flex justify-between grid grid-cols-1 gap-4 md:grid-cols-4 md:gap-6 mt-5">
                <div class="Myhover border-[1px] hover:border-[1px] hover:border-orange-600 rounded-[5px] p-4">
                    <a href=""><img class="w-full md:w-[260px]" src="../image/iphone 12 pro max.jpg" alt=""></a>
                    <p class="text-[19px] mt-3">
                        Điện thoại
                    </p>
                    <p class="text-[20px] font-bold">
                        Iphone 12 Pro max
                    </p>
                    <div class="text-[16px] font-bold">
                        <label class="line-through text-slate-500">888888VNĐ</label><label class=" text-red-600" for="">9999999VNĐ</label>
                    </div>
                    <div class="cart border-[2px] border-black hover:bg-red-400 hover:text-white text-center mt-3 ">
                        <a class="no-underline text-black" href="detail.php?id=>">Mua Ngay</a>
                    </div>
                    <div class="hoverproduct">
                        <a class="text-red-500 no-underline" href="">Xem nhanh</a>
                    </div> 
                </div>
            </div> -->
            
        </div>
        <div class="mx-auto md:w-[1200px] mt-[55px]">
            <div class="flex justify-between mt-3 md:border-b-2 font-bold">
                <p class="text-[20px]">
                    ĐANG GIẢM GIÁ
                </p>
                <!-- <p class="hidden md:block">
                    <a class="text-[#0088CC]" href="">XEM TẤT CẢ</a>
                </p> -->
            </div>

            <div class="flex justify-between grid grid-cols-1 gap-4 md:grid-cols-4 gap-8 mt-6">
                <div class="Myhover border-[1px] hover:border-[1px] hover:border-orange-600 rounded-[5px] p-4">
                    <img class="w-full md:w-[260px]" src="image/iphone 13 pro.jpeg" alt="">
                    <p class="text-[15px] mt-3">
                        Điện Thoại
                    </p>
                    <p class="text-[20px] font-bold">
                        Iphone 13 Pro
                    </p>
                    <div class="text-[16px] font-bold">
                        <label class="line-through text-slate-500">14.000.000 VNĐ</label><label class=" text-red-600" for="">13.000.000 VNĐ</label>
                    </div>
                    <div class="cart border-[2px] border-black hover:bg-red-400 hover:text-white text-center mt-3 ">
                        <a class="" href="detail.html">Mua Ngay</a>
                    </div>
                    <div class="hoverproduct">
                        <a href="">Xem nhanh</a>
                    </div>
                </div>
                <div class="border-[1px] hover:border-[1px] hover:border-orange-600 rounded-[5px] p-4">
                    <img class="w-full md:w-[260px]" src="image/iphone 8 plus.jpg" alt="">
                    <p class="text-[15px] mt-3">
                        Điện Thoại
                    </p>
                    <p class="text-[20px] font-bold">
                        Iphone 8 Plus
                    </p>
                    <div class="text-[16px] font-bold">
                        <label class="line-through text-slate-500">8.000.000 VNĐ</label><label class=" text-red-600" for="">6.000.000 VNĐ</label>
                    </div>
                    <div class="cart border-[2px] border-black hover:bg-red-400 hover:text-white text-center mt-3 ">
                        <a class="" href="">Mua Ngay</a>
                    </div>
                </div>
                <div class="border-[1px] hover:border-[1px] hover:border-orange-600 rounded-[5px] p-4">
                    <img class="w-full md:w-[260px]" src="image/iphone xsmax.jpg" alt="">
                    <p class="text-[15px] mt-3">
                        Điện Thoại
                    </p>
                    <p class="text-[20px] font-bold">
                        Iphone XS Max
                    </p>
                    <div class="text-[16px] font-bold">
                        <label class="line-through text-slate-500">16.000.000 VNĐ</label><label class="text-red-600" for="">15.000.000 VNĐ</label>
                    </div>
                    <div class="cart border-[2px] border-black hover:bg-red-400 hover:text-white text-center mt-3 ">
                        <a class="" href="">Mua Ngay</a>
                    </div>
                </div>
                <div class="border-[1px] hover:border-[1px] hover:border-orange-600 rounded-[5px] p-4">
                    <img class="w-full md:w-[260px] h-[241px]" src="image/rog phone 5 pro.jpg" alt="">
                    <p class="text-[15px] mt-3">
                        Điện Thoại
                    </p>
                    <p class="text-[20px] font-bold">
                        Rog Phone 5 Pro
                    </p>
                    <div class="text-[16px] font-bold">
                        <label class="line-through text-slate-500">16.000.000 VNĐ</label><label class=" text-red-600" for="">15.000.000 VNĐ</label>
                    </div>
                    <div class="cart border-[2px] border-black hover:bg-red-400 hover:text-white text-center mt-3 ">
                        <a class="" href="">Mua Ngay</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="max-w-full bg-gradient-to-bl from-cyan-500 to-blue-500 mt-10 py-[70px]">
            <div class="max-w-[1200px] mx-auto">
                <div class="text-center text-white font-bold">
                    <div class="">
                        <p class="text-[55px]">GIỜ VÀNG GIÁ SỐC</p>
                        <p class="text-[30px]">
                            GIẢM TỚI 50% TẤT CẢ CÁC SẢN PHẨM ĐIỆN THOẠI
                        </p>
                        <div class="mt-[25px]">
                            <a class="cart border-[1px] p-3 border-sky-500 hover:bg-sky-800" href=""><i class="fa-regular fa-heart"></i>MUA NGAY</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="mx-auto md:w-[1200px]">
            <div class="flex justify-between mt-3 md:border-b-2 font-bold">
                <p class="text-[20px]">
                    CÁC SẢN PHẨM LIÊN QUAN
                </p>
                <p class="hidden md:block">
                    <a class="text-[#0088CC]" href="">XEM TẤT CẢ</a>
                </p>
            </div>

            <div class="md:flex justify-between grid grid-cols-1gap-4md:grid-cols-4 gap-8 mt-6">
                <div class="border-[1px] hover:border-[1px] hover:border-orange-600 rounded-[5px] p-4">
                    <img class="w-full md:w-[260px]" src="image/iphone 13 pro.jpeg" alt="">
                    <p class="text-[15px] mt-3">
                        Điện Thoại
                    </p>
                    <p class="text-[20px] font-bold">
                        Iphone 13 Pro
                    </p>
                    <div class="text-[16px] font-bold">
                        <label class="line-through text-slate-500">14.000.000 VNĐ</label><label class=" text-red-600" for="">13.000.000 VNĐ</label>
                    </div>
                    <div class="cart border-[2px] border-black hover:bg-red-400 hover:text-white text-center mt-3 ">
                        <a class="" href="detail.html">Mua Ngay</a>
                    </div>
                </div>
                <div class="border-[1px] hover:border-[1px] hover:border-orange-600 rounded-[5px] p-4">
                    <img class="w-full md:w-[260px]" src="image/iphone 8 plus.jpg" alt="">
                    <p class="text-[15px] mt-3">
                        Điện Thoại
                    </p>
                    <p class="text-[20px] font-bold">
                        Iphone 8 Plus
                    </p>
                    <div class="text-[16px] font-bold">
                        <label class="line-through text-slate-500">8.000.000 VNĐ</label><label class=" text-red-600" for="">6.000.000 VNĐ</label>
                    </div>
                    <div class="border-[2px] border-black hover:bg-red-400 hover:text-white text-center mt-3 ">
                        <a class="" href="detail.html">Mua Ngay</a>
                    </div>
                </div>
                <div class="border-[1px] hover:border-[1px] hover:border-orange-600 rounded-[5px] p-4">
                    <img class="w-full md:w-[260px]" src="image/iphone xsmax.jpg" alt="">
                    <p class="text-[15px] mt-3">
                        Điện Thoại
                    </p>
                    <p class="text-[20px] font-bold">
                        Iphone XS Max
                    </p>
                    <div class="text-[16px] font-bold">
                        <label class="line-through text-slate-500">16.000.000 VNĐ</label><label class="text-red-600" for="">15.000.000 VNĐ</label>
                    </div>
                    <div class="cart border-[2px] border-black hover:bg-red-400 hover:text-white text-center mt-3 ">
                        <a class="" href="">Mua Ngay</a>
                    </div>
                </div>
                <div class="border-[1px] hover:border-[1px] hover:border-orange-600 rounded-[5px] p-4">
                    <img class="w-full md:w-[260px] h-[241px]" src="image/rog phone 5 pro.jpg" alt="">
                    <p class="text-[15px] mt-3">
                        Điện Thoại
                    </p>
                    <p class="text-[20px] font-bold">
                        Rog Phone 5 Pro
                    </p>
                    <div class="text-[16px] font-bold">
                        <label class="line-through text-slate-500">16.000.000 VNĐ</label><label class="text-red-600" for="">15.000.000 VNĐ</label>
                    </div>
                    <div class="cart border-[2px] border-black hover:bg-red-400 hover:text-white text-center mt-3 ">
                        <a class="" href="">Mua Ngay</a>
                    </div>
                </div>

            </div>
        </div>
        </div>
        <!-- footer -->
        <!-- bg-gradient-to-tr from-cyan-500 to-blue-500 -->



    </section>

</body>