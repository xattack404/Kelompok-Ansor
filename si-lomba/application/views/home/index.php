<!DOCTYPE html>
<html lang="en" id="home">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Utama</title>
    <link rel="stylesheet" href="<?= base_url('/'); ?>assets/style.css">
    <link rel="stylesheet" href="<?= base_url('/'); ?>assets/fontawesome/css/all.min.css">
    <!-- jquery -->
    <script src="<?= base_url('/'); ?>assets/js/jquery-3.4.1.min.js"></script>
</head>
<body>
<?php include 'navbar.php'; ?>
<!-- Jumbotron -->
<div class="jumbotron">
    <div class="jumbotron-content">
        <h1>SELAMAT DATANG DI <br> SISTEM INFORMASI LOMBA</h1>
        <p>asah kemampuanmu dengan mengikuti lomba dan jadilah juara</p>
    </div>
</div>
<!-- Akhir Jumbotron -->

<!-- Konten -->
<div class="content" id="konten">
    <div class="judul-konten">
        <h1>last event</h1>
        <p>semua lomba terbaru hari ini</p>
    </div>
    <div class="katalog">
            <div class="item-katalog">
                <div class="item">
                    <a href="<?= base_url('/'); ?>lomba.php">
                        <img src="assets/IMGLomba/sampel.jpg" alt="">
                        <label for="">Piala walikota Bekasi</label>
                    </a>
                </div>
            </div>
            <div class="item-katalog">
                <div class="item">
                    <a href="">
                        <img src="assets/IMGLomba/sampel2.jpeg" alt="">
                        <label for="">PIALA WALIKOTA SOLO 6 - ROAD RACE</label>
                    </a>
                </div>
            </div>
            <div class="item-katalog">
                <div class="item">
                    <a href="">
                        <img src="assets/IMGLomba/sampel5.jpg" alt="">
                        <label for="">JATENG OPEN 2018 HOCKEY</label>
                    </a>
                </div>
            </div>
            <div class="item-katalog">
                <div class="item">
                    <a href="">
                        <img src="assets/IMGLomba/sampel3.jpeg" alt="">
                        <label for="">Jakarta Open 2019</label>
                    </a>
                </div>
            </div>
            <div class="item-katalog">
                <div class="item">
                    <a href="">
                        <img src="assets/IMGLomba/sampel4.jpg" alt="">
                        <label for="">Jakarta Open 2019</label>
                    </a>
                </div>
            </div>
            <div class="item-katalog">
                <div class="item">
                    <a href="">
                        <img src="assets/IMGLomba/sampel6.jpg" alt="">
                        <label for="">Piala Menpora 2018</label>
                    </a>
                </div>
            </div>
    </div>
    <div class="more">
        <a href="">
            More event <br> <i class="fas fa-ellipsis-h"></i>
        </a>
    </div>
    
</div>
<!-- Akhir Konten -->

<!-- Button Kontak -->
<div class="kontak">
    <a href="">Contact</a>
</div>
<!-- Button kontak akhir -->


 <!-- top -->
 <top id="top">
    <a href="#home" class="page-scroll">
        <i class="fas fa-arrow-up"></i>
    </a>
</top>
    <script type="text/javascript">
        window.addEventListener("scroll", function(){
            var top = document.querySelector("top");
            top.classList.toggle("totop", window.scrollY > 0);
        })
    </script>
 <!-- top akhir -->


