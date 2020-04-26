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
        <!-- input nama penanggung jawab  -->
            <div class="input">
                <label for="namapen">nama penanggung jawab</label>
                <input type="text" id="namapen" placeholder="masukan nama penanggung jawab">
            </div>

        <!-- input nama komunitas  -->            
            <div class="input">
                <label for="namakom">nama komunitas</label>
                <input type="text" id="namakom" placeholder="masukan nama komunitas anda">
            </div>

        <!-- input jumlah anggota  -->                            
            <div class="input">
                <label for="jumlahanggota">jummlah anggota</label>
                <input type="number" id="jumlahanggota" placeholder="masukan jumlah anggota komunitas">
            </div>

        <!-- input kewarganegaraan -->                        
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
        <!--======== input anggotan =========--> 
        <?php for ($i = 0; $i < 3; $i++){ ?>
        <div class="box"> 
        <!-- nama anggota -->            
            <div class="input">
                <label for="namaanggota">nama anggota</label>
                <input type="text" id="namaanggota" placeholder="masukan nama anggota komunitas">
            </div>
        <!-- input tanggal lahir -->             
            <div class="input">
                <label for="">Tanggal lahir</label>
                <input type="date" id="">
            </div>
        <!-- jenis kelamin -->                           
            <div class="input">
                <label for="">jenis kelamin</label>
                <select name="" id="">
                    <option value="">--pilih--</option>
                    <option value="">laki - laki</option>
                    <option value="">perempuan</option>
                </select>
            </div>
        <!-- input kewarganegaraan -->                           
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
            <div class="box-btn">
                <a href=""><button type="button" class="red">back</button></a>
                <button type="submit" class="blue">Registrasi</button>   
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

            <div class="box-btn">
                    <a href=""><button type="button" class="red">back</button></a>
                    <button type="submit" class="blue">Registrasi</button>   
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