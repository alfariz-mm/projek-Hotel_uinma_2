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
   <?php
   session_start();
   include "koneksi.php";
   error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
   if (!isset($_SESSION['username'])) { ?>
      <script language="javascript">
         alert("Anda Belum Login");
         document.location = "login.php";
      </script>
      <?php
   }
   $user = $_SESSION['username'];
   $sql = "SELECT * from user where username='$user'";
   $query = $koneksi->query($sql);
   $data = $query->fetch_array();
   ?>
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
                           <!-- <figure><a href="home.php"><img src="logo-uinma_hotel.png" alt="#" style="display: inline-block;"></a></figure> -->
                           <a href="home.php"><img src="logo-uinma_hotel.png" alt="Logo Uinma Hotel" /></a>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                  <nav class="navigation navbar navbar-expand-md navbar-dark ">
                     <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04"
                        aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                     </button>
                     <div class="collapse navbar-collapse" id="navbarsExample04">
                        <ul class="navbar-nav mr-auto">
                           <li class="nav-item active">
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
                           <li class="nav-item">
                              <a class="nav-link" href="contact.php">Hubungi Kami</a>
                           </li>
                           <li class="nav-item logout">
                              <a class="nav-link logout" href="logout.php">Logout</a>
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
   <!-- banner -->
   <section class="banner_main">
      <div id="myCarousel" class="carousel slide banner">
         <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
         </ol>
         <div class="carousel-inner">
            <div class="carousel-item active">
               <img class="first-slide" src="images/banner1.jpg" alt="First slide">
               <div class="container">
               </div>
            </div>
            <div class="carousel-item">
               <img class="second-slide" src="images/banner2.jpg" alt="Second slide">
            </div>
            <div class="carousel-item">
               <img class="third-slide" src="images/banner3.jpg" alt="Third slide">
            </div>
         </div>
         <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
         </a>
         <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
         </a>
      </div>
      <div class="booking_ocline">
         <div class="container">
            <div class="row">
               <div class="col-md-5">
                  <div class="book_room">
                     <h1>Booking Kamar Online</h1>
                     <form class="book_now">
                        <div class="row">
                           <div class="col-md-12">
                              <span>Arrival</span>
                              <img class="date_cua" src="images/date.png">
                              <input class="online_book" placeholder="dd/mm/yyyy" type="date" name="dd/mm/yyyy">
                           </div>
                           <div class="col-md-12">
                              <span>Departure</span>
                              <img class="date_cua" src="images/date.png">
                              <input class="online_book" placeholder="dd/mm/yyyy" type="date" name="dd/mm/yyyy">
                           </div>
                           <div class="col-md-12">
                              <button class="book_btn"><a href="reservasi.php" style="color:gold;">Booking
                                    Sekarang</a></button>
                           </div>
                        </div>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!-- end banner -->
   <!-- about -->
   <div class="about">
      <div class="container-fluid">
         <div class="row">
            <div class="col-md-5">
               <div class="titlepage">
                  <h2>Tentang Kami</h2>
                  <p>Selamat datang di Hotel Uinma, mitra tepercaya Anda dalam reservasi hotel. Misi kami adalah
                     menyediakan pengalaman pemesanan yang mulus dan efisien bagi para pelancong di seluruh dunia.
                     Apakah Anda sedang merencanakan perjalanan bisnis, liburan keluarga, atau liburan romantis,
                     Hotel Uinma memastikan Anda menemukan akomodasi yang sempurna sesuai dengan kebutuhan Anda </p>
                  <a class="read_more" href="tentang.php">Baca Lainnya</a>
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
   <!-- our_room -->
   <div class="our_room">
      <div class="container">
         <div class="row">
            <div class="col-md-12">
               <div class="titlepage">
                  <h2>Kamar</h2>
                  <p>Berikut adalah berbagai tipe kamar yang tersedia di HotelUinma </p>
               </div>
            </div>
         </div>
         <div class="row">
            <div class="col-md-4 col-sm-6">
               <div id="serv_hover" class="room">
                  <div class="room_img">
                     <figure><img src="images/room1.jpg" alt="#" /></figure>
                  </div>
                  <div class="bed_room">
                     <h3>Kamar Standar</h3>
                     <p>Kamar nyaman dengan fasilitas dasar, termasuk tempat tidur ukuran king, Wi-Fi gratis, dan
                        kamar mandi pribadi.</p>
                  </div>
               </div>
            </div>
            <div class="col-md-4 col-sm-6">
               <div id="serv_hover" class="room">
                  <div class="room_img">
                     <figure><img src="images/room2.jpg" alt="#" /></figure>
                  </div>
                  <div class="bed_room">
                     <h3>Kamar Superior</h3>
                     <p>Kamar luas dengan pemandangan indah, dilengkapi dengan TV layar datar, minibar, dan area
                        duduk yang nyaman.</p>
                  </div>
               </div>
            </div>
            <div class="col-md-4 col-sm-6">
               <div id="serv_hover" class="room">
                  <div class="room_img">
                     <figure><img src="images/room3.jpg" alt="#" /></figure>
                  </div>
                  <div class="bed_room">
                     <h3>Kamar Deluxe</h3>
                     <p>Kamar mewah dengan dekorasi elegan, menyediakan fasilitas kelas atas, termasuk bak mandi,
                        layanan kamar 24 jam, dan balkon pribadi.</p>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- end our_room -->
   <!-- gallery -->
   <div class="gallery">
      <div class="container">
         <div class="row">
            <div class="col-md-12">
               <div class="titlepage">
                  <h2>Galeri</h2>
                  <p>Selamat datang di Hotel Uinma, tempat di mana kemewahan dan kenyamanan bertemu. Jelajahi
                     galeri kami untuk melihat sekilas pengalaman yang menanti Anda. Dari kamar yang elegan hingga
                     fasilitas kelas dunia, setiap detail dirancang untuk memanjakan Anda. </p>
               </div>
            </div>
         </div>
      </div>
      <div class="container-fluid">
         <div class="row">
            <div class="col-md-3 col-sm-6">
               <div class="gallery_img">
                  <figure><img src="images/gallery1.jpg" alt="#" /></figure>
               </div>
            </div>
            <div class="col-md-3 col-sm-6">
               <div class="gallery_img">
                  <figure><img src="images/gallery2.jpg" alt="#" /></figure>
               </div>
            </div>
            <div class="col-md-3 col-sm-6">
               <div class="gallery_img">
                  <figure><img src="images/gallery3.jpg" alt="#" /></figure>
               </div>
            </div>
            <div class="col-md-3 col-sm-6">
               <div class="gallery_img">
                  <figure><img src="images/gallery4.jpg" alt="#" /></figure>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- end gallery -->
   <!-- blog -->
   <div class="blog">
      <div class="container">
         <div class="row">
            <div class="col-md-12">
               <div class="titlepage">
                  <h2>Blog</h2>
                  <p>Temukan informasi terbaru dan tips perjalanan di blog kami. Dari panduan destinasi hingga
                     ulasan hotel, blog kami menyediakan wawasan berharga untuk membantu Anda merencanakan
                     perjalanan yang sempurna.</p>
               </div>
            </div>
         </div>
         <div class="row">
            <div class="col-md-4 col-sm-6">
               <div class="blog_box">
                  <div class="blog_img">
                     <figure><img src="images/blog1.jpg" alt="#" /></figure>
                  </div>
                  <div class="blog_room">
                     <h3>Eksplorasi Wisata Kota</h3>
                     <span>Post by: Admin</span>
                     <p>Jelajahi pesona kota-kota besar dengan panduan wisata dari kami. Temukan tempat-tempat
                        tersembunyi dan nikmati pengalaman lokal yang otentik.</p>
                  </div>
               </div>
            </div>
            <div class="col-md-4 col-sm-6">
               <div class="blog_box">
                  <div class="blog_img">
                     <figure><img src="images/blog2.jpg" alt="#" /></figure>
                  </div>
                  <div class="blog_room">
                     <h3>Wisata Kuliner</h3>
                     <span>Post by: Admin</span>
                     <p>Nikmati petualangan kuliner dengan rekomendasi restoran terbaik dari kami. Rasakan cita rasa
                        lokal yang menggugah selera di setiap gigitan.</p>
                  </div>
               </div>
            </div>
            <div class="col-md-4 col-sm-6">
               <div class="blog_box">
                  <div class="blog_img">
                     <figure><img src="images/blog3.jpg" alt="#" /></figure>
                  </div>
                  <div class="blog_room">
                     <h3>Tips Perjalanan</h3>
                     <span>Post by: Admin</span>
                     <p>Dapatkan tips perjalanan praktis dan informasi terbaru untuk membuat perjalanan Anda lebih
                        nyaman dan menyenangkan. Siapkan diri Anda untuk petualangan tak terlupakan.</p>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- end blog -->
   <!-- footer -->
   <footer>
      <div class="footer">
         <div class="container">
            <div class="row">
               <div class="col-md-3 col-sm-6">
                  <ul class="social_icon">
                     <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                     <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                     <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                     <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                     <li><a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
                  </ul>
               </div>
               <div class="col-md-3 col-sm-6">
                  <div class="main">
                     <h3>Kontak Kami</h3>
                     <p>Alamat: Jl. Mawar No. 1, Jakarta, Indonesia</p>
                     <p>Telepon: +62 123 4567 890</p>
                     <p>Email: info@hoteluinma.com</p>
                  </div>
               </div>
               <div class="col-md-3 col-sm-6">
                  <div class="main">
                     <h3>Layanan</h3>
                     <ul class="menu_footer">
                        <li><a href="home.php">Beranda</a></li>
                        <li><a href="tentang.php">Tentang Kami</a></li>
                        <li><a href="kamar.php">Kamar</a></li>
                        <li><a href="galeri.php">Galeri</a></li>
                        <li><a href="blog.php">Blog</a></li>
                        <li><a href="contact.php">Hubungi Kami</a></li>
                     </ul>
                  </div>
               </div>
               <div class="col-md-3 col-sm-6">
                  <div class="main">
                     <h3>Ikuti Kami</h3>
                     <p>Dapatkan informasi terbaru dan penawaran spesial dengan mengikuti media sosial kami.</p>
                     <ul class="social_icon">
                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="copyright">
         <p>© 2024 Hotel Uinma. All Rights Reserved.</p>
      </div>
   </footer>
   <!-- end footer -->
   <!-- Javascript files-->
   <script src="js/jquery.min.js"></script>
   <script src="js/popper.min.js"></script>
   <script src="js/bootstrap.bundle.min.js"></script>
   <script src="js/jquery-3.0.0.min.js"></script>
   <script src="js/plugin.js"></script>
   <!-- sidebar -->
   <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
   <script src="js/custom.js"></script>
   <script>
      var slideIndex = 1;
      showSlides(slideIndex);

      function plusSlides(n) {
         showSlides(slideIndex += n);
      }

      function currentSlide(n) {
         showSlides(slideIndex = n);
      }

      function showSlides(n) {
         var i;
         var slides = document.getElementsByClassName("mySlides");
         var dots = document.getElementsByClassName("dot");
         if (n > slides.length) { slideIndex = 1 }
         if (n < 1) { slideIndex = slides.length }
         for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
         }
         for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
         }
         slides[slideIndex - 1].style.display = "block";
         dots[slideIndex - 1].className += " active";
      }
   </script>
</body>

</html>