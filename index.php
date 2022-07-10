<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Favicons -->
    <link rel="apple-touch-icon" sizes="180x180" href="Asset/picture/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="Asset/picture/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="Asset/picture/favicons/favicon-16x16.png">
    <link rel="manifest" href="Asset/picture/favicons/site.webmanifest">
    <link rel="mask-icon" href="Asset/picture/favicons/safari-pinned-tab.svg" color="#f3bc18">
    <link rel="shortcut icon" href="Asset/picture/favicons/favicon.ico">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="msapplication-config" content="Asset/picture/favicons/browserconfig.xml">
    <meta name="theme-color" content="#1e1e1e">



    <!-- Css -->
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="node_modules/@fortawesome/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="Asset/css/style.css">
    <link rel="stylesheet" href="node_modules/owl.carousel/dist/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="node_modules/owl.carousel/dist/assets/owl.theme.default.min.css">

    <title>เพื่อนบ้าน</title>
</head>

<body>

    <nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-alpha">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">
                <img src="Asset/picture/baanlogo (2).png" width="120" height="57" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#regispage">ลงทะเบียน</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#project">แนวคิดโครงการ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#map">แผนที่ตั้งโครงการ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">ติดต่อเรา</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- carousel -->
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="https://images.unsplash.com/photo-1512917774080-9991f1c4c750?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1280&h=700&q=80" alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="https://images.unsplash.com/photo-1549517045-bc93de075e53?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1280&h=700&q=80" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="https://images.unsplash.com/photo-1513584684374-8bab748fbf90?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1280&h=700&q=80" alt="Third slide">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <a name="regispage"></a>
    <header data-jarallax data-speed="0.2" class="page-title jarallax" style="background-image: url('Asset/picture/brennan.jpg');">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h5 class="display-4 font-weight-bold">ลงทะเบียนรับสิทธิพิเศษ</h5>
                </div>
            </div>
        </div>
    </header>
    
    <!-- Form Register -->
    <div class="container py-5">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"> กรุณากรอกข้อมูล </h5>
                        <form method="post" action="setting/process.php">
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label>ชื่อ</label>
                                    <input type="text" name="first_name" class="form-control" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label>นามสกุล</label>
                                    <input type="text" name="last_name" class="form-control">
                                </div>
                                <div class="form-group col-md-6">
                                    <label>เบอร์โทรติดต่อ</label>
                                    <input type="text" name="numphone" class="form-control">
                                </div>
                                <div class="form-group col-md-6">
                                    <label>อีเมล์</label>
                                    <input type="text" name="e_mail" class="form-control">
                                </div>
                                <div class="form-group col-md-6">
                                    <label>งบประมาณการซื้อ</label>
                                    <select class="custom-select" type="text" name="detail">
                                        <option selected>กรุณาระบุงบประมาณการซื้อ</option>
                                        <option value="น้อยกว่า 1.5 ล้านบาท">น้อยกว่า 1.5 ล้านบาท</option>
                                        <option value="1.5 - 2.5 ล้านบาท">1.5 - 2.5 ล้านบาท</option>
                                        <option value="2.6 - 3.5 ล้านบาท">2.6 - 3.5 ล้านบาท</option>
                                        <option value="3.6 - 4.5 ล้านบาท">3.6 - 4.5 ล้านบาท</option>
                                        <option value="4.6 - 5.0 ล้านบาท">4.6 - 5.0 ล้านบาท</option>
                                        <option value="5 ล้านบาทขึ้นไป">5 ล้านบาทขึ้นไป</option>
                                    </select>
                                </div>
                            </div>
                            <button type="submit" name="btn-submit" class="btn btn-warning d-block mx-auto">ลงทะเบียน</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!--Section header -->
    <a name="project"></a>
    <header data-jarallax data-speed="0.2" class="page-title jarallax bg-alpha" style="background-image: url('Asset/picture/brennan.jpg');">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h5 class="display-4 font-weight-bold">แนวคิดโครงการ</h5>
                    <p>ใส่ใจในทุกรายละเอียดของงานดีไซน์ สะท้อนความหรูหรา ในขณะเดียวกันก็ยังให้ความสำคัญกับพื้นที่สีเขียว ด้วยการดีไซน์ Courtyard ที่เน้นความร่มรื่นจากต้นไม้ใหญ่ เติมเต็มความสดชื่นให้ทุกการพักผ่อนของคุณ</p>
                </div>
            </div>
        </div>
    </header>


    <!-- owl carousal -->

    <!-- map -->
    <div class="container-fluid py-5">
        <div class="row">
            <div class="col-12">
                <div class="owl-carousel owl-theme img">
                    <div>
                        <img src="Asset/picture/home/home1.jpeg" width="571" height="250" alt="...">
                    </div>
                    <div>
                        <img src="Asset/picture/home/home2.jpeg" width="571" height="250" alt="...">
                    </div>
                    <div>
                        <img src="Asset/picture/home/home3.jpeg" width="571" height="250" alt="...">
                    </div>
                    <div>
                        <img src="Asset/picture/home/home4.jpeg" width="571" height="250" alt="...">
                    </div>
                    <div>
                        <img src="Asset/picture/home/home5.jpeg" width="571" height="250" alt="...">
                    </div>
                    <div>
                        <img src="Asset/picture/home/home6.jpeg" width="571" height="250" alt="...">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="owl-carousel owl-theme">
                    <div>
                        <img src="Asset/picture/home/home4.jpeg" width="571" height="250" alt="...">
                    </div>
                    <div>
                        <img src="Asset/picture/home/home5.jpeg" width="571" height="250" alt="...">
                    </div>
                    <div>
                        <img src="Asset/picture/home/home6.jpeg" width="571" height="250" alt="...">
                    </div>
                    <div>
                        <img src="Asset/picture/home/home7.jpeg" width="571" height="250" alt="...">
                    </div>
                    <div>
                        <img src="Asset/picture/home/home8.jpeg" width="571" height="250" alt="...">
                    </div>
                    <div>
                        <img src="Asset/picture/home/home9.jpeg" width="571" height="250" alt="...">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
    <br>


    <!-- map -->
    <a name="map"></a>
    <header data-jarallax data-speed="0.2" class="page-title jarallax" style="background-image: url('Asset/picture/brennan.jpg');">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h5 class="display-4 font-weight-bold">แผนที่ตั้งโครงการ</h5>
                </div>
            </div>
        </div>
    </header>


    <div class="container-fluid py-5">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3877.327514536761!2d100.41759291744383!3d13.637830599999997!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30e2bce725deaf31%3A0xa9f5e13ab36b3fec!2sKin%20Corporation%20Company%20Limited!5e0!3m2!1sth!2sth!4v1648116798982!5m2!1sth!2sth" width="100%" height="700" style="border:0;" allowfullscreen=""></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Footerเมนู -->
    <a name="contact"></a>
    <footer class="semi-footer p-5 text-center text-md-left">
        <div class="row">
            <div class="col-md-4">
                <a class="navbar-brand" href="#">
                    <img src="Asset/picture/baanlogo (2).png" width="120" height="57" alt="">
                </a>
                <p>
                    <i class="fa-solid fa-square-phone"></i> 099-9999999 <br>
                    <i class="fa-solid fa-envelope"></i> email@email.com <br>
                    <i class="fa-solid fa-address-card"></i> เลขที่ 22/2 ถนนสะแกงาม แขวงแสมดำ
                    เขตบางขุนเทียน กรุงเทพมหานคร 10150
                </p>
            </div>
            <div class="col-md-4">
                <h4>MENU</h4>
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#regispage">ลงทะเบียน</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#project">แนวคิดโครงการ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#map">แผนที่ตั้งโครงการ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">ติดต่อเรา</a>
                    </li>
                </ul>
            </div>
            <div class="col-md-4">
                <h3>Social Media</h3>
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="http://line.me/ti/p/~@phuanbaan" target="_blank"><i class="fa-brands fa-line fa-2xl"></i>  LINE</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://www.facebook.com/phuanbaan" target="_blank"><i class="fa-brands fa-facebook-square fa-2xl"></i>  FACEBOOK</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://twitter.com/phuanbaan" target="_blank"><i class="fa-brands fa-twitter fa-2xl"></i> TWITTER</a>
                    </li>
                </ul>
                <!-- <i class="fa-brands fa-line fa-2xl"></i><br>
            <i class="fa-brands fa-facebook-square fa-2xl"></i><br>
            <i class="fa-brands fa-twitter fa-2xl"></i> -->
            </div>

    </footer>

    </footer>
    <!-- Footerส่วนท้าย -->
    <footer class="endline">
        <span>COPYRIGHT © 2022 <a href="https://www.phuanbaan.com/" target="_blank">phuanbaan.com</a></span>
        ALL Rights Reserved
    </footer>

    <!-- Section buttom to top -->
    <div class="to-top">
        <i class="fa fa-angle-up" aria-hidden="true"></i>
    </div>


    <script src="node_modules/jquery/dist/jquery.min.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="node_modules/popper.js/dist/umd/popper.min.js"></script>
    <script src="node_modules/jarallax/dist/jarallax.min.js"></script>
    <script src="node_modules/owl.carousel/dist/owl.carousel.min.js"></script>
    <script src="Asset/js/main.js"></script>
</body>

</html>