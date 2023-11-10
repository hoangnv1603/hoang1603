<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE,edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">

</head>


<body>


    <script>
        $(document).ready(function () {
            $('#carouselExampleCaptions').carousel();
        });
    </script>

    <section class="myheader ">
        <div class="container py-3 ">
            <div class="row align-items-center">
                <div class="col-md-2 ms-3"><i class="fa-solid fa-crown"></i>
                    <!-- <img src="images/Screenshot_2023-11-07_202913-removebg-preview.png" class="img-fluid" width="200px"
                        height="200px" alt="logo"> -->
                    <h2>NHT FOOD</h2>
                </div>
                <div class="col-md-4 ">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Từ khóa tìm kiếm"
                            aria-label="Recipient's username" aria-describedby="basic-addon2">
                        <span class="input-group-text" id="basic-addon2"><i
                                class="fa-solid fa-magnifying-glass"></i></span>
                    </div>
                </div>
                <div class="col-md-3 ">
                    <div class="row">
                        <div class="col">
                            <div class="row">
                                <div class="col-3">
                                    <div class="fs-3 text-danger"><i class="fa-solid fa-phone"></i>
                                    </div>
                                </div>
                                <div class="col-9">Tư vấn hỗ trợ <br>
                                    <strong class="text-danger">0125647893</strong>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="row">
                                <div class="col-3">
                                    <div class="fs-3 text-danger"><i class="fa-regular fa-user"></i>
                                    </div>
                                </div>
                                <div class="col-9">Xin Chào <br>
                                   <a href="index.php?action=nguyenng"> <strong class="text-danger">Đăng nhập</strong></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Chỗ buton khi cần nhấn vào -->
                <div class="col-md-2 ">
                    <div class="row">
                        <div class="col"> <a href="#" class=" position-relative">
                                <span class="fs-4"> <i class="fa-regular fa-heart"></i></span>
                                <span
                                    class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                                    99+

                                </span>
                            </a></div>
                        <div class="col"> <a href="#" class=" position-relative">
                                <span class="fs-4"> <i class="fa-solid fa-bag-shopping"></i></span>
                                <span
                                    class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                                    0

                                </span>
                            </a></div>
                        <div class="col"> <a href="#" class=" position-relative">
                                <span class="fs-4"> <i class="fa-solid fa-share-from-square"></i></span>
                                <span
                                    class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                                    9+

                                </span>
                            </a></div>
                    </div>



                </div>

            </div>
        </div>
    </section>
    </section>
    <section class="mymainmenu bg-danger">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-9">
                    <nav class="navbar navbar-expand-lg bg-danger">
                        <div class="container-fluid">
                            <a class="navbar-brand d-none" href="#">Navbar</a>
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                <li class="nav-item">
                                        <a class="nav-link text-white active" aria-current="page" href="index.php">Trang chủ</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link text-white active" aria-current="page" href="#">Các Món Ăn
                                            Nổi Bật</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link text-white" href="#">Giới Thiệu Về Chúng Tôi</a>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle text-white" href="#" role="button"
                                            data-bs-toggle="dropdown" aria-expanded="false">
                                            Các Bữa Ăn
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#">Action</a></li>
                                            <li><a class="dropdown-item" href="#">Another action</a></li>
                                            <li>
                                                <hr class="dropdown-divider">
                                            </li>
                                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                                        </ul>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link text-white" aria-disabled="true">Tin tức</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link text-white" aria-disabled="true"></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link text-white" aria-disabled="true">Liên hệ</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>

    </section>

    <section class="mymaincontent my-3">
        <div class="container">
            <div class="slider">
                <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0"
                            class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                            aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                            aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="images/212759_Kielbasa-with-Brussels-Sprouts-in-Mustard-Cream-Sauce_naples34102_4557692_original-4x3-1-776b4326f85d4b5089e8712bf94d41c5.webp"
                                class="d-block " width="100%" height="600px">
                        </div>
                        <div class="carousel-item">
                            <img src="images/4Chili-Topped-Potato-Soup-22b31bf974ad4e6ebd02a0263fb704f1.webp"
                                class="d-block " width="100%" height="600px">
                        </div>
                        <div class="carousel-item">
                            <img src="images/Pan-Roasted-Chicken-with-Lemon-Garlic-Brussels-Sprouts-and-Potatoes-2000-f5e6329ebfa84b1f9a98db27a0f47d16.webp"
                                class="d-block w-100" height="600px">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
            <!--slider-->

            <script>
                $(document).ready(function () {
                    $('#carouselExampleCaptions').carousel({
                        interval: 100 // Thời gian chuyển đổi tự động (3 giây)
                    });
                });
            </script>