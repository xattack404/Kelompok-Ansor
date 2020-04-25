<!DOCTYPE html>
<html lang="en" id="home">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Utama</title>
    <link rel="stylesheet" href="assets/style.css">
    <link rel="stylesheet" href="assets/fontawesome/css/all.min.css">
    <!-- jquery -->
    <script src="assets/js/jquery-3.4.1.min.js"></script>
</head>
<body>
<?php include 'navbar.php'; ?>
<div class="all-boxregister">
<!-- ====== button registrasi===== -->
<div class="box">
    <a href="#registrasi">registrasi</a>
    <a href="#registrasikomunitas">komunitas</a>
</div>
<!-- ====== button registrasi===== -->
<!-- ====== form registrasi komunitas====== -->
    <form class="box-registrasi2" action="" id="registrasikomunitas">
        <div class="box">            
            <div class="input">
                <label for="nik">nik</label>
                <input type="text" id="nik" placeholder="masukan NIK">
            </div>            
            <div class="input">
                <label for="nik">nik</label>
                <input type="text" id="nik" placeholder="masukan NIK">
            </div>
        </div>
    </form>
<!-- ====== form registrasi komunitas akhir ====== -->

<!-- ====== form registrasi ====== -->
    <form class="box-registrasi" action="" id="registrasi">
        <div class="box">
            <div class="input">
                <label for="nik">nik</label>
                <input type="text" id="nik" placeholder="masukan NIK">
            </div>
            <div class="input">
                <label for="nama">nama</label>
                <input type="text" id="nama" placeholder="masukan nama anda">    
            </div>  
            <div class="input">
                <label for="email">email</label>
                <input type="email" id="email" placeholder="masukan email aktif">
            </div>
            <div class="input">
                <label for="telp">no telepon</label>
                <input type="tel" id="telp" placeholder="masukan no teleopn aktif">    
            </div>  
            <div class="input">
                <label for="jkel">jenis kelamin</label>
                <select name="" id="jkel">
                    <option value="">--pilih--</option>
                    <option value="">laki-laki</option>
                    <option value="">wanita</option>
                </select>
            </div>
            <div class="input">
                <label for="tglhr">tanggal lahir</label>
                <input type="date" id="tglhr">    
            </div>   
        </div>


        <div class="box">
            <div class="input">
                <label for="">provinsi</label>
                <select name="" id="">
                    <option value="">--pilih provinsi--</option>
                </select>
            </div>
            <div class="input">
                <label for="">kota</label>
                <select name="" id="">
                    <option value="">--pilih kota--</option>
                </select>    
            </div>
            <div class="input">
                <label for="">kecamatan</label>
                <select name="" id="">
                    <option value="">--pilih kecamatan--</option>
                </select>    
            </div>
            <div class="input">
                <label for="">alamat</label>
                <textarea name="" id="" cols="30" rows="10" placeholder="isi alamat rumah anda"></textarea>    
            </div>   
        </div>
    </form>
<!-- ====== form registrasi akhir ====== -->
</div>
<script src="assets/js/style.js"></script>
</body>
</html>