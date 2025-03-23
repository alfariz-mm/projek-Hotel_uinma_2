<!DOCTYPE html>
<html lang="en">

<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>HotelUinma</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Link tombol logout -->
    <link rel="stylesheet" href="logout.css">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- style css -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Responsive-->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- fevicon -->
    <link rel="shortcut icon" href="logo-uinma_hotel.png" type="image/x-icon">
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">

    <style>
      .logo {
         text-align: center;
         /* Untuk mengatur logo berada di tengah */
         padding: 10px;
         /* Menambahkan padding untuk memberikan ruang di sekitar logo */
      }

      .logo img {
         width: auto;
         /* Biarkan browser menentukan lebar secara otomatis */
         height: 100%;
         /* Tinggi penuh dari elemen parent */
         max-height: 55px;
         /* Atur tinggi maksimum sesuai kebutuhan */
         display: block;
         /* Menghilangkan jarak bawah gambar */
         margin: 0px;
         /* Mengatur gambar agar berada di tengah */

      }
   </style>
</head>
<!-- body -->

<body class="main-layout">
    <!-- header -->
    <header>
        <!-- header inner -->
        <div class="header">
            <div class="container">
                <div class="row">
                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                        <div class="full">
                            <div class="center-desk">
                                <div class="logo">
                                <a href="home.php"><img src="logo-uinma_hotel.png" alt="Logo Uinma Hotel" /></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                        <nav class="navigation navbar navbar-expand-md navbar-dark ">
                            <button class="navbar-toggler" type="button" data-toggle="collapse"
                                data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false"
                                aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarsExample04">
                                <ul class="navbar-nav mr-auto">
                                    <li class="nav-item">
                                        <a class="nav-link" href="home.php">Beranda</a>
                                    </li>
                                    <li class="nav-item active">
                                        <a class="nav-link" href="tentang.php">Tentang Kami</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="kamar.php">Kamar</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="galeri.php">Galeri</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="blog.php">Blog</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="contact.php">Hubungi Kami</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="logout.php">logout</a>
                                    </li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- end header inner -->
    <!-- end header -->
    <div class="back_re">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="title">
                        <h2>Tentang Kami</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- about -->
    <div class="about">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-5">
                    <div class="titlepage">
                        <p class="margin_0">Selamat datang di HotelUinma, mitra tepercaya Anda dalam reservasi hotel.
                            Misi kami adalah menyediakan pengalaman pemesanan yang mulus dan efisien bagi para pelancong
                            di seluruh dunia. Apakah Anda sedang merencanakan perjalanan bisnis, liburan keluarga, atau
                            liburan romantis, Hotel Uinma memastikan Anda menemukan akomodasi yang sempurna sesuai dengan
                            kebutuhan Anda.</p>
                        <a class="read_more" href="kamar.php">Baca Lainnya</a>
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="about_img">
                        <figure><img src="images/about.png" alt="#" /></figure>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end about -->
    <!-- footer -->
    <footer>
        <div class="footer">
            <div class="container">
                <div class="row">
                    <div class=" col-md-4">
                        <h3>Hubungi Kami</h3>
                        <ul class="conta">
                            <li><i class="fa fa-map-marker" aria-hidden="true"></i></li>
                            <li><i class="fa fa-mobile" aria-hidden="true"></i> </li>
                            <li> <i class="fa fa-envelope" aria-hidden="true"></i><a href="#"></a></li>
                        </ul>
                    </div>
                    <div class="col-md-4">
                        <h3>Menu Link</h3>
                        <ul class="link_menu">
                            <li><a href="home.php">Home</a></li>
                            <li class="active"><a href="tentang.php"> Tentang Kami</a></li>
                            <li><a href="kamar.php">Kamar</a></li>
                            <li><a href="galeri.php">Galeri</a></li>
                            <li><a href="blog.php">Blog</a></li>
                            <li><a href="contact.php">Hubungi Kami</a></li>
                        </ul>
                    </div>
                    <div class="col-md-4">
                        <h3>News letter</h3>
                        <form class="bottom_form">
                            <input class="enter" placeholder="Enter your email" type="text" name="Enter your email">
                            <button class="sub_btn">subscribe</button>
                        </form>
                        <ul class="social_icon">
                            <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="copyright">
                <div class="container">
                    <div class="row">
                        <div class="col-md-10 offset-md-1">
                            <p></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- end footer -->
</body>

</html>