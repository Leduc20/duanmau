<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ASM</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- bootrap cho phần login -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>

    <!-- <link rel="stylesheet" href="css/style1.css"> -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@100;200;300;400;500;600;800&display=swap" rel="stylesheet">
    <!-- <style>
        body {
            font-family: 'Roboto Slab', serif;
        }

        .header {
            background-image: linear-gradient(to bottom, #bdc3c7, #d7e8f8)
        }

        .cart:hover {
            background-image: linear-gradient(to right, #c471ed, #f64f59)
        }

        .hoverproduct {
            color: white;
            font-size: 18px;
            font-weight: bold;
            border: 1px solid black;
            background-image: linear-gradient(to bottom right, #fafafa, rgb(241, 37, 37));
            padding: 15px;
            border-radius: 4px;
            opacity: 0;
            text-align: center;
            margin-left: 55px;
            position: absolute;
            bottom: 0;
            transition: all 0.2s linear;
        }

        .Myhover:hover .hoverproduct {
            opacity: 1;
            border: none;
        }
    </style> -->
</head>

<body onload="loadAnh()" class="px-2">
    <section class="max-w">
        <div class="header mx-auto bg-slate-300">
            <div class="text-center md:flex justify-between md:max-w-[1200px] mx-auto leading-[45px]">
                <div>
                    <a class="no-underline text-[22px] text-black" href="">
                        WEBSITE ĐIỆN TỬ ĐIỆN MÁY
                    </a>
                </div>
                <div class="flex justify-between hidden md:block">
                    <p class="mr-8">
                        KHUYẾN MẠI HOT
                    </p>
                    <!-- <div class="flex">
                        <a href="" class="px-2"><i class="fa-brands fa-facebook-square"></i></a>
                        <a href="" class="px-2"><i class="fa-regular fa-envelope"></i></a>
                    </div> -->
                </div>
            </div>
        </div>
        <div class="md:flex justify-between mx-auto max-w-[1200px] mt-5 items-center">
            <div class="">
                <!-- <a href="index.html"><i class="fa-solid fa-magnifying-glass"></i></a> -->
            </div>
            <div class="">
                <form action="">
                    <select name="" id="" class="border-[1px] w-[80px]">
                        <option value="">Tất cả</option>
                        <option value="">A</option>
                        <option value="">b</option>
                        <option value="">c</option>
                    </select>
                    <input class="border-[1px] w-[295px]" type="text" name="" id="">
                    <button class="border-[1px] w-[45px] bg-orange-300" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
                </form>
            </div>
            <!-- Login/Cart -->
            <div class="hidden md:block">
                <div class="flex">
                    <div class="dropdown">
                        <button type="button" class="btn btn-primary dropdown-toggle bg-sky-500" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">



                            <i class="fa-solid fa-arrow-right-to-bracket"></i>
                            Login
                        </button>
                        <form class="dropdown-menu p-4 w-[300px]">
                            <div class="mb-3">
                                <label for="exampleDropdownFormEmail2" class="form-label">Email address</label>
                                <input type="email" class="form-control" id="exampleDropdownFormEmail2" placeholder="email@example.com">
                            </div>
                            <div class="mb-3">
                                <label for="exampleDropdownFormPassword2" class="form-label">Password</label>
                                <input type="password" class="form-control" id="exampleDropdownFormPassword2" placeholder="Password">
                            </div>
                            <div class="mb-3">
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="dropdownCheck2">
                                    <label class="form-check-label" for="dropdownCheck2">
                                        Remember me
                                    </label>
                                </div>
                                <div class="form-check">
                                    <label class="form-check-label" for="dropdownCheck2">
                                        <a class="no-underline text-black" href="index.php?act=dktv">Đăng ký thành viên</a>
                                    </label>
                                </div>
                                <div class="form-check">
                                    <label class="form-check-label" for="dropdownCheck2">
                                        <a class="no-underline text-black" href="index.php?act=qmk">Quên mật khẩu</a>
                                    </label>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Sign in</button>
                        </form>
                    </div>
                    <div class="ml-4">
                        <button class="btn btn-primary" type="submit"><i class="mr-[5px] fa-sharp fa-solid fa-cart-arrow-down"></i>Giỏ hàng</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- nav -->
        <!-- max-w-[1200px] mx-auto py-2 -->

        <div class="mx-auto max-w bg-cyan-300 mt-2">
            <div class="max-w-[1200px] mx-auto py-2">

                <ul class="nav nav-pills nav-fill">
                    <li class="nav-item text-[19px] font-bold hover:bg-sky-500 rounded duration-700">
                        <a class="text-black nav-link" aria-current="page" href="index.php">Trang chủ</a>
                    </li>
                    <li class="nav-item text-[19px] font-bold hover:bg-sky-500 rounded duration-700">
                        <a class="text-black nav-link" href="#">Giới thiệu</a>
                    </li>
                    <li class="nav-item text-[19px] font-bold hover:bg-sky-500 rounded duration-700">
                        <a class="text-black nav-link" href="#">Liên hệ</a>
                    </li>
                    <li class="nav-item text-[19px] font-bold hover:bg-sky-500 rounded duration-700">
                        <a class="text-black nav-link" href="#">Gợi ý</a>
                    </li>
                    <li class="nav-item text-[19px] font-bold hover:bg-sky-500 rounded duration-700">
                        <a class="text-black nav-link" href="#">Hỏi đáp</a>
                    </li>
                    <li class="nav-item text-[19px] font-bold hover:bg-sky-500 rounded  dropdown">
                        <!-- <a class="text-black nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Danh mục
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="#">Danh mục</a></li>
                            <li><a class="dropdown-item" href="#">Top 10 yêu thích</a></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul> -->
                        <div class="dropdown">
                            <a class="btn btn-secondary dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Dropdown link
                            </a>

                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        </nav>

        </ul>
        </div>

        </div>
    </section>



</body>

</html>