<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registrasi</title>
    <link rel="stylesheet" href="assets/style.css">
    <link rel="stylesheet" href="assets/fontawesome/css/all.min.css">
    <script src="assets/js/jquery-3.4.1.min.js"></script>
</head>
<body>
      
    <form action="" id="" class="box-register">
      <h1>REGISTRASI</h1>
      <div class="box">
        <!-- NIK -->
          <div class="input">
            <label for="nik">NIK</label>
            <input class="" id="nik" type="text" placeholder="MASUKAN NIK">
          </div>
        <!-- NIK akhir-->

        <!-- nama -->
          <div class="input">
            <label for="nama">NAMA</label>
            <input class="" id="nama" type="text" placeholder="MASUKAN NAMA">
          </div>
        <!-- nama akhir-->        

        <!-- email -->
          <div class="input">
            <label for="email">EMAIL</label>
            <input class="" id="email" type="email" placeholder="MASUKAN EMAIL AKTIF">
          </div>
        <!-- email akhir-->

        <!-- no telepon -->
          <div class="input">
            <label for="username">NO TELEPON</label>
            <input class="" id="username" type="text" placeholder="MASUKAN NO TELEPON">
          </div>
        <!-- no telepon akhir -->  

          <div class="input2">
             <!-- jenis kelamin -->
            <div class="inp">
                <label for="username">JENIS KELAMIN</label>
                <div class="jenis-kelamin">
                    <input class="" id="pria" name="jl" type="radio">
                    <label class="jlpria" for="pria">PRIA</label>

                    <input class="" id="wanita" name="jl" type="radio">
                    <label class="jlwanita" for="wanita">WANITA</label>
                </div>
            </div>
            <!-- jenis kelamin akhir-->

             <!-- tanggal lahir -->
            <div class="inp2">
                <label for="tgl">TANGGAL LAHIR</label>
                <input class="" id="tgl" type="date" placeholder="MASUKAN NO TELEPON">
            </div>
            <!-- tanggal lahir akhir -->
          </div>
      </div>


      <div class="box">
        <!-- provinsi -->
          <div class="input">
            <label for="provinsi">provinsi</label>
            <input class="" id="provinsi" type="text" placeholder="MASUKAN PROVINSI">
          </div>
        <!-- provinsi akhir-->

        <!-- kota -->
        <div class="input">
          <label for="kota">kota</label>
          <input class="" id="kota" type="text" placeholder="MASUKAN KOTA">
        </div>
        <!-- kota akhir-->

      <!-- kecamatan -->
      <div class="input">
        <label for="kecamatan">kecamatan</label>
        <input class="" id="kecamatan" type="text" placeholder="MASUKAN KECAMATAN">
      </div>
      <!-- kecamatan akhir-->

      <!-- alamat -->
      <div class="input">
        <label for="alamat">alamat</label>
        <textarea name="" id="" cols="30" rows="10" placeholder="MASUKAN ALAMAT"></textarea>
      </div>
      <!-- alamat akhir-->

      <!-- button -->
      <a href="lomba.php"><button type="button">BACK</button></a>
      <a href="registrasikelompok.php"><button type="button">NEXT</button></a>
      <!-- button akhir-->
      </div>

      


    </form>
    
</body>
</html>