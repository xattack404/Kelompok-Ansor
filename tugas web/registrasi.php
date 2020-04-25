<!DOCTYPE html>
<html lang="en" id="home">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi</title>
    <link rel="stylesheet" href="assets/style.css">
    <link rel="stylesheet" href="assets/fontawesome/css/all.min.css">
    <!-- jquery -->
    <script src="assets/js/jquery-3.4.1.min.js"></script>
</head>
<body>
<?php include 'navbar.php'; ?>
<div class="all-boxregister">

<!-- ====== form registrasi komunitas====== -->
    <form class="box-registrasi2" action="" id="registrasikomunitas">
        <?php ?>
        <div class="box">            
            <div class="input">
                <label for="namapen">nama penanggung jawab</label>
                <input type="text" id="namapen" placeholder="masukan nama penanggung jawab">
            </div>            
            <div class="input">
                <label for="namakom">nama komunitas</label>
                <input type="text" id="namakom" placeholder="masukan nama komunitas anda">
            </div>                        
            <div class="input">
                <label for="jumlahanggota">jummlah anggota</label>
                <input type="number" id="jumlahanggota" placeholder="masukan jumlah anggota komunitas">
            </div>                        
            <div class="input">
                <label for="">Status kewarganegaraan</label>
                <select name="" id="">
                    <option value="">--pilih--</option>
                    <option value="">Warga negara indonesia</option>
                    <option value="">Warga negara asing</option>
                </select>
            </div>
        </div>
        <?php ?>
        <?php for ($i = 0; $i < 4; $i++){ ?>
        <div class="box">            
            <div class="input">
                <label for="namaanggota">nama anggota</label>
                <input type="text" id="namaanggota" placeholder="masukan nama anggota komunitas">
            </div>            
            <div class="input">
                <label for="namakom">Tanggal lahir</label>
                <input type="date" id="namakom">
            </div>                          
            <div class="input">
                <label for="">jenis kelamin</label>
                <select name="" id="">
                    <option value="">--pilih--</option>
                    <option value="">laki - laki</option>
                    <option value="">perempuan</option>
                </select>
            </div>                          
            <div class="input">
                <label for="">Status kewarganegaraan</label>
                <select name="" id="">
                    <option value="">--pilih--</option>
                    <option value="">Warga negara indonesia</option>
                    <option value="">Warga negara asing</option>
                </select>
            </div>
        </div>
        <?php }?>
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

<!-- ====== button registrasi===== -->
<div class="box2">
    <a href="#registrasi">registrasi</a>
    <a href="#registrasikomunitas">komunitas</a>
</div>
<!-- ====== button registrasi===== -->
</div>
<script src="assets/js/style.js"></script>
</body>
</html>