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
    <link rel="icon" href="logo-uinma_hotel.png" type="image/gif" />
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
    <!-- Tweaks for older IEs-->
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css"
        media="screen">

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

<body class="main-layout inner_page">
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
                                    <li class="nav-item">
                                        <a class="nav-link" href="tentang.php">Tentang Kami</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="kamar.php">Kamar</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="galeri.php">Galeri</a>
                                    </li>
                                    <li class="nav-item active">
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
                        <h2>Blog</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- blog -->
    <div class="blog">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="titlepage">

                        <p class="margin_0"></p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="blog_box">
                        <div class="blog_img">
                            <figure><img src="images/blog1.jpg" alt="#" /></figure>
                        </div>
                        <div class="blog_room">
                            <h3>Kolam Renang</h3>
                            <!-- <span>The standard chunk </span> -->
                            <p>Terletak di tengah-tengah taman tropis yang asri, kolam renang kami menawarkan tempat sempurna untuk bersantai dan menyegarkan diri. Dengan air yang jernih dan suasana yang tenang, kolam renang ini menjadi tempat ideal untuk berenang santai atau berjemur di bawah sinar matahari. </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="blog_box">
                        <div class="blog_img">
                            <figure><img src="images/blog2.jpg" alt="#" /></figure>
                        </div>
                        <div class="blog_room">
                            <h3>Ruang Tamu</h3>
                            <!-- <span>The standard chunk </span> -->
                            <p>Ruang tamu kami dirancang dengan elegan dan nyaman, dilengkapi dengan sofa mewah dan dekorasi modern. Tempat yang sempurna untuk berkumpul bersama keluarga atau teman, menikmati percakapan hangat, atau sekadar bersantai sambil menikmati pemandangan indah dari jendela besar. </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="blog_box">
                        <div class="blog_img">
                            <figure><img src="images/blog3.jpg" alt="#" /></figure>
                        </div>
                        <div class="blog_room">
                            <h3>Kamar</h3>
                            <!-- <span>The standard chunk </span> -->
                            <p>Kamar kami menonjolkan kenyamanan dan kemewahan dengan tempat tidur berukuran king yang dilapisi linen berkualitas tinggi. Dilengkapi dengan fasilitas modern seperti TV layar datar, mini-bar, dan Wi-Fi gratis, kamar ini memberikan suasana yang tenang dan nyaman untuk istirahat setelah hari yang panjang. </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end blog -->

    <!--  footer -->
    <footer>
        <div class="footer">
            <div class="container">
                <div class="row">
                    <div class=" col-md-4">
                        <h3>Hubungi Kami</h3>
                        <ul class="conta">
                            <li><i class="fa fa-map-marker" aria-hidden="true"></i> </li>
                            <li><i class="fa fa-mobile" aria-hidden="true"></i> </li>
                            <li> <i class="fa fa-envelope" aria-hidden="true"></i><a href="#"> </a></li>
                        </ul>
                    </div>
                    <div class="col-md-4">
                        <h3>Menu Link</h3>
                        <ul class="link_menu">
                            <li><a href="home.php">Beranda</a></li>
                            <li><a href="tentang.php">Tentang Kami</a></li>
                            <li><a href="kamar.php">Kamar</a></li>
                            <li><a href="galeri.php">Galeri</a></li>
                            <li class="active"><a href="blog.php">Blog</a></li>
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
                            <p>

                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- end footer -->
</body>

</html>