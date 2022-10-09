<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ASM</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="../icon/fontawesome-free-6.1.1-web/css/all.min.css">
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
    
    <div class="max-w-full">
        <div class="max-w-[1200px] mx-auto py-2">
            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="../content/image/imageslide/slide1.jpg" class="d-block w-100 rounded" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="../content/image/imageslide/slide1.jpg" class="d-block w-100 rounded" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="../content/image/imageslide/slide1.jpg" class="d-block w-100 rounded" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </div>
    

</body>

</html>
<script src="../js/js/js.js"></script>