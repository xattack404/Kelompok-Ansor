<!DOCTYPE html>
<html lang="en" id="">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Semua Lomba</title>
    <link rel="stylesheet" href="assets/style.css">
    <link rel="stylesheet" href="assets/fontawesome/css/all.min.css">
    <!-- jquery -->
    <script src="assets/js/jquery-3.4.1.min.js"></script>
</head>
<body>
<?php include 'navbar.php'; ?>

<div class="content" id="konten2">
    <div class="judul-konten2">
        <h1>Semua Lomba</h1>
    </div>
    <div class="katalog2">

    <?php for ($i = 0; $i < 20; $i++){ ?>
            <div class="item-katalog">
                <div class="item">
                    <a href="lomba.php">
                        <img src="assets/IMGLomba/sampel.jpg" alt="">
                        <label for="">Piala walikota Bekasi</label>
                    </a>
                </div>
            </div>
    <?php } ?>
            
</div>

 <!-- top -->
 <top id="top">
    <a href="#konten2" class="page-scroll">
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


    <?php include 'footer.php'; ?>   
</div>

<script src="assets/js/style.js"></script>
</body>
</html>