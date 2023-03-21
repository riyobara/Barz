<?php 
    session_start();
    require "function/functions.php";
    
    if ( isset($_SESSION["login"]) ) {
        header("Location: dashboard");
        exit;
    } elseif(isset($_COOKIE['login'])) {
        header("Location: dashboard");
        exit;
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="img/profil.png">
    <title>DOMPET AMAL</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/"
        crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
        type="text/css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/modal.css">
    <style>
        .parallax {
            background: url(img/body2.jpg);
            background-attachment: fixed;
            /* background-size: cover; */
            background-repeat: no-repeat;
        }   

        .parallax2 {
            background: url(img/polban6.jpg);
            background-attachment: fixed;
            background-repeat: no-repeat;
            background-size: cover;
        }
    </style>
</head>

<body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top main-nav" id="mainNav">
        <div class="container">
            <a class="js-scroll-trigger" href="#page-top">
                <img src="img/profil.png" width="20px" style="margin-right: 10px; margin-bottom: 2px;">
            </a>
            <a class="navbar-brand js-scroll-trigger" href="#page-top">Dompet Amal</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#fitur">Fitur</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#kriteriadap">Kriteria Bantuan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#about">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#contact">Contact Us</a>
                    </li>
                    <li class="nav-item">
                        <a href="login" class="nav-link">Sign in</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Navigation -->

    <!-- header -->
    <!-- <header id="home" class="text-light parallax"> -->
    <!-- <div class="container konten">
            <h1 style="font-size: 36pt;">DAP - DOMPET AMAL POLIBATAM</h1>
            <p class="lead" style="font-size: 27pt;">Sistem Informasi dan Layanan Karyawan</br>
        Politeknik Negeri Batam</p>
            <a href="login" class="btn btn-outline-light button">Mulai Sekarang</a>
        </div> -->
        
	<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
		<ol class="carousel-indicators">
			<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
			<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
			<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
		</ol>
		<div id="home" class="carousel-inner">
            <div class="carousel-caption">
                <h1 style="font-size: 36pt;">DAP - DOMPET AMAL POLIBATAM</h1>
                <p class="lead" style="font-size: 27pt;">Sistem Informasi dan Layanan Karyawan</br>
                Politeknik Negeri Batam</p>
                <a href="login" class="btn btn-outline-light button">Mulai Sekarang</a>
            </div>
			<div class="carousel-item active">
				<img src="img/body2.jpg" alt="Gambar 1">
			</div>
			<div class="carousel-item">
				<img src="img/polban5.jpg" alt="Gambar 2">
			</div>
			<div class="carousel-item">
				<img src="img/polban3.jpeg" alt="Gambar 3">
			</div>
		</div>
		<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
	</div>
    <!-- </header> -->
    <!-- header -->

    <!-- fitur -->
    <section id="fitur" class="bg-light">
        <div class=" container konten2">
            <div class="garis text-center">FITUR</div>

            <div class="col-lg-12 foot-fitur">
                <h4 class="headline text-center">DAP</h4>
                <p class="isi-fitur text-center">DAP - Dompet amal polibatam adalah dana sosial yang disetorkan setiap bulan
                oleh semua karyawan	polibatam dan dikumpulkan 
                oleh pengelola Dompet Amal.</p>
            </div>

            <div class="row row2">
                <div class="col-lg-6 fiturs">
                    <div class="gbr">
                        <div class="box">
                            <img src="img/pengajuan2.png" class="gambar-fitur img" width="100%">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 fiturs">
                    <h4 class="headline">Pengajuan Bantuan</h4>
                    <p class="isi-fitur">
                        Kami memberikan fitur pengajuan bantuan dana yang
                        dikumpulkan untuk semua kebutuhan karyawan sesuai 
                        kriteria bantuan DAP.</p>
                </div>
            </div>

            <div class="row row2">
                <div class="col-lg-6 fiturs text-right">
                    <h4 class="headline">Jenis Layanan</h4>
                    <p class="isi-fitur">
                        Kami menyediakan fitur layanan transaksi berupa
                        transfer dan tunai untuk mempermudah karyawan
                        dalam pengelolaan uang. Dengan fitur ini, 
                        karyawan dapat lebih mudah untuk melakukan 
                        setor dan tarik uang.
                    </p>
                </div>
                <div class="col-lg-6 fiturs">
                    <div class="gbr">
                        <div class="box">
                            <img src="img/layanan.png" class="gambar-fitur img" width="100%">
                        </div>
                    </div>
                </div>
            </div>

            <div class="row row2">
                <div class="col-lg-6 fiturs">
                    <div class="gbr">
                        <div class="box">
                            <img src="img/monitoring.png" class="gambar-fitur img" width="100%">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 fiturs">
                    <h4 class="headline">Monitoring Keuangan</h4>
                    <p class="isi-fitur">
                        Monitoring keuangan diperlukan untuk mengetahui total dana DAP
                        yang terkumpul saat ini. karyawan juga dapat mengetahui
                        record transaksi.
                    </p>
                </div>
            </div>

        </div>
    </section>
    <!-- fitur -->

    <!-- Kriteria Bantuan -->
    <section id="kriteriadap">
    <div class="garis text-center">KRITERIA BANTUAN</div>
        <center>
            <img src="img/dap1.jpg" width="60%">
            <img src="img/dap2.jpg" width="60%">
        </center>
    </div>
    <!-- kriteria Bantuan -->

    <!-- about us -->
    <section id="about" class="bg-primary parallax2">
        <div class="container">
            <div style="color: white;" class="garis garis3 text-center">WORO TEAM</div>
            <div class="row text-center">
                <center>
                    <div class="col-lg-4">
                        <div class="team">
                            <div class="gbr">
                                <div class="box">
                                    <img class="img" src="profile/azmi.jpg" width="100%">
                                </div>
                            </div>
                            <div class="teks">
                                <h3 class="job-desk">Team Leader</h3>
                                <p>AKBAR WAHYU MAULANA</p>
                                <p>Ngoding aja dulu, jagonya belakangan</p>
                            </div>
                        </div>
                    </div>
                <center>
            </div>
            <div class="row text-center">
                <div class="col-lg-4">
                    <div class="team">
                        <div class="gbr">
                            <div class="box">
                                <img class="img" src="profile/azmi.jpg" width="100%">
                            </div>
                        </div>
                        <div class="teks">
                            <h3 class="job-desk">Anggota 1</h3>
                            <p>Alpber Pardomuan Tambunan</p>
                            <p>Program erorr aja ku perbaiki, apalagi hubungan kita</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="team">
                        <div class="gbr">
                            <div class="box">
                                <img class="img" src="profile/sayyid.jpg" width="100%">
                            </div>
                        </div>
                        <div class="teks">
                            <h3 class="job-desk">Anggota 4</h3>
                            <p>Muhamad Rafiansyah</p>
                            <p>Ngode in program mah ngasih harapan, kalau kamu mah enggak</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="team">
                        <div class="gbr">
                            <div class="box">
                                <img class="img" src="profile/dina.jpg" width="100%">
                            </div>
                        </div>
                        <div class="teks">
                            <h3 class="job-desk">Anggota 2</h3>
                            <p>Elfrida Tenti Nurlela</p>
                            <p>Kalau kamu bingung mau ngetik apa, bagusnya sih lorem ipsum aja</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- about us -->

    <!-- contact -->
    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <div class="garis garis2 text-center">CONTACT US</div>
                    <div class="row text-center">
                       <div class="col col1">
                            <a href="https://web.facebook.com/polibatamofficial/?_rdc=1&_rdr" target="_blank">
                                <!-- <img src="icons/facebook.png" width="20%"> -->
                                <img src="https://img.icons8.com/color/480/000000/facebook.png" width="20%">
                            </a>
                        </div>
                        <div class="col col3">
                            <a href="https://www.instagram.com/polibatamofficial/" target="_blank">
                                <!-- <img src="icons/instagram.png" width="20%"> -->
                                <img src="https://img.icons8.com/color/480/000000/instagram-new.png" width="20%">
                            </a>
                        </div>
                        <div class="col-4 text-left">
                            <a href="https://www.youtube.com/@PolibatamTV/about" target="_blank">
                                <!-- <img src="icons/youtube.png" width="20%"> -->
                                <img src="https://img.icons8.com/color/480/000000/youtube-squared.png" width="20%">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- contact -->

    <!-- Footer -->
    <div class="py-3 bg-dark">
        <div class="container text-light">
            <div class="row">
                <div class="col-lg-3 col-6 p-3">
                    <h5> <b>Main</b> </h5>
                    <ul class="list-unstyled">
                        <li> 
                            <a href="#home" class="js-scroll-trigger foot-link">Home</a> 
                            <a href="#fitur" class="js-scroll-trigger foot-link">Fitur</a> 
                            <a href="#about" class="js-scroll-trigger foot-link">About Us</a> 
                        </li>
                    </ul>
                </div>
                <div class="col-lg-3 col-6 p-3">
                    <h5> <b>Others</b> </h5>
                    <ul class="list-unstyled">
                        <li> <a href="faq" class="foot-link">FAQ</a> </li>
                        <li> <a href="#" class="foot-link">Promotion Videos</a> </li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-6 p-3">
                    <h5> <b>About</b> </h5>
                    <p class="mb-0">DAP - dilengkapi dengan fitur menarik yang dapat mempermudah karyawan mengelola keuangannya.</p>
                </div>
                <div class="col-lg-3 col-md-6 p-3">
                    <h5> <b>Follow us</b> </h5>
                    <div class="row">
                        <div class="col-md-12 d-flex align-items-center justify-content-between my-2">
                            <a href="https://web.facebook.com/polibatamofficial/?_rdc=1&_rdr" class="foot-link" target="_blank">
                                <i class="d-block fa fa-facebook-official warna-icon fa-lg mr-2"></i>
                            </a>
                            <a href="https://www.instagram.com/polibatamofficial/." class="foot-link" target="_blank">
                                <i class="d-block fa fa-instagram warna-icon fa-lg mx-2"></i>
                            </a>
                            <a href="https://www.youtube.com/@PolibatamTV/about." class="foot-link" target="_blank">
                                <i class="d-block fa fa-youtube warna-icon fa-lg mx-2"></i>
                            </a>                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 text-center">
                    <p class="mb-0 mt-2">Copyright © 2023 Woro Team. All rights reserved</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer -->

    <!-- <footer class="bg-dark foot">
        <div class="container">
            <p class="m-0 text-center text-white">Copyright &copy; 2018 Semicolon SQUAD</p>
        </div>
    </footer> -->

    <!-- js utama -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/jquery-easing/jquery.easing.min.js"></script>


    <!-- js scrolling -->
    <script src="js/scrolling-nav.js"></script>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>