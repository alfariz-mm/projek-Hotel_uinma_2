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
                                    <li class="nav-item">
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
                                    <li class="nav-item active">
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
                        <h2>Hubungi Kami</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--  contact -->
    <div class="contact">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <form id="request" class="main_form">
                        <div class="row">
                            <div class="col-md-12 ">
                                <input class="contactus" placeholder="Nama" type="type" name="Name">
                            </div>
                            <div class="col-md-12">
                                <input class="contactus" placeholder="Email" type="type" name="Email">
                            </div>
                            <div class="col-md-12">
                                <input class="contactus" placeholder="Nomor Telepon" type="type" name="Phone Number">
                            </div>
                            <div class="col-md-12">
                                <textarea class="textarea" placeholder="Pesan" type="type" name="Message"></textarea>
                            </div>
                            <div class="col-md-12">
                                <button class="send_btn">Kirim</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-md-6">
                    <div class="map_main">
                        <div class="map-responsive">
                            <iframe
                                src="https://www.google.com/maps/embed/v1/place?key=AIzaSyA0s1a7phLN0iaD6-UE7m4qP-z21pH0eSc&amp;q=Universitas Islam Negeri Maulana Malik Ibrahim Malang, Indonesia"
                                width="600" height="400" frameborder="0" style="border:0; width: 100%;"
                                allowfullscreen=""></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end contact -->
    <!--  footer -->
    <footer>
        <div class="footer">
            <div class="container">
                <div class="row">
                    <div class=" col-md-4">
                        <h3>Hubungi Kami</h3>
                        <ul class="conta">
                            <li><i class="fa fa-map-marker" aria-hidden="true"></i> </li>
                            <li><i class="fa fa-mobile" aria-hidden="true"></i></li>
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
                            <li><a href="blog.php">Blog</a></li>
                            <li class="active"><a href="contact.php">Hubungi Kami</a></li>
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