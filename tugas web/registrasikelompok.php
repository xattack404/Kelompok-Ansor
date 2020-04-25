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
      
    <form action="" id="" class="box-register2">
      <h1>REGISTRASI kelompok</h1>
      <div class="box">
        <div class="box-klompok">
            <div class="input2">
              <label for="nama">Nama Penanggung Jawab</label>
              <input class="" id="nama" type="text" placeholder="MASUKAN NAMA ANDA">
            </div>
            <div class="input2">
                <label for="komunitas">Nama Komunitas</label>
                <input class="" id="komunitas" type="text" placeholder="MASUKAN NAMA KOMUNITAS ANDA">
              </div>
            <div class="input2">
                <label for="jmlanggota">Jumlah anggota komunitas</label>
                <input type="number" name="" id="">
            </div>             
        </div>


        <!-- repeat box -->
      <?php for ($i = 0; $i < 4; $i++){ ?>
      <div class="box-klompok">
            
            <div class="input2">
              <label for="namaanggota">Nama</label>
              <input class="" id="namaanggota" type="text" placeholder="MASUKAN NAMA ANGGOTA ANDA">
            </div>

            <div class="input2">
                <label for="tanggallhr">Tanggal Lahir</label>
                <input class="" id="tanggallhr" type="date">
            </div> 

            <div class="input2">
                <label for="jenisklmn">Jenis Kelamin</label>
                <div class="jenis-kelamin2">
                    <input class="" id="pria" name="jl" type="radio">
                    <label class="jlpria" for="pria">PRIA</label>

                    <input class="" id="wanita" name="jl" type="radio">
                    <label class="jlwanita" for="wanita">WANITA</label>
                </div>
                
            </div>   

      </div>
      <?php } ?>
     <a href="registrasi.php"><button type="button">BACK</button></a>
      <a href="konfirmasi.php"><button type="button">konfirmasi</button></a>
      <!-- button akhir-->
      </div>
    </form>
    
</body>
</html>