<!DOCTYPE html>
<html lang="en" id="home">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Utama</title>
    <link rel="stylesheet" href="{{ asset('assets_frontend/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets_frontend/fontawesome/css/all.min.css') }}">
    <!-- jquery -->
    <script src="{{ asset('assets_frontend/js/jquery-3.4.1.min.js') }}"></script>
</head>
<body>
@include('layouts.frontendnavbar')
<!-- konten-->
<!-- /* ====================Konfirmasi Pembayaran====================*/ -->
<div class="box-pembayaran" id="box-pemby">
        <h2>KONFIRMASI PEMBAYARAN</h2>
        <div class="ket-pembayaran">
            Untuk melakukan konfirmasi pembayaran, silahkan cek email dari kami dan masukkan nomor invoice pada input dibawah, kemudian klik tombol Cari Data
        </div>
        <form class="serach-box">
            <div class="ket-serch">
                Input No Invoice
            </div>
            <input type="search" name="" id="">
            <button type="button">
               <a href="#poppembayaran"> Cari </a>
            </button>
        </form>
    </div>
<!-- /* ====================Konfirmasi Pembayaran Akhir====================*/ -->


<!-- ====== pop up ======= -->
<div class="bg-popup" id="poppembayaran">
    <form class="popup-pembayaran" action="" id="">
        <div class="keterangan-popup">
            Konfirmasi pembayaran No Invoice <span>1234567889</span>
        </div>

        <div class="input">
             <label for="">nama lengkap</label>
             <div class="ket"> Tahajjudin</div>    
         </div> 

         <div class="input-boxpopup">
             <div class="input">
                 <label for="">No Telepon</label>
                 <div class="ket"> 082330044949</div>    
             </div> 

             <div class="input">
                 <label for="">Email</label>
                 <div class="ket"> tapai@gmail.com</div>    
             </div> 
         </div>

         <div class="input-boxpopup">
            <div class="input">
                <label for="">Nama Komunitas</label>
                <div class="ket"> deng guring</div>    
            </div> 

            <div class="input">
                <label for="">Jumlah Atlit</label>
                <div class="ket"> 5</div>    
            </div> 
        </div>

        <div class="input">
            <table border="1" cellpadding="5" cellspacing="0">
                <tr>
                    <th>Nama Atlit</th>
                    <th>Tanggal Lahir</th>
                    <th>Jenis Kelamin</th>
                    <th>Kelas</th>
                    <th>Kategori</th>
                </tr>
                <tr>
                    <td>agoes klepon</td>
                    <td>45 mei 1890</td>
                    <td>lakek</td>
                    <td>reguler</td>
                    <td>tapais</td>
                </tr>
            </table>
        </div>

        <div class="input-boxpopup2">
            <div class="input">
                <label for="">Nama Bank</label>
                <div class="ket"> BNI</div>    
            </div> 

            <div class="input">
                <label for="">No Rekening</label>
                <div class="ket"> 123456789</div>    
            </div> 

            <div class="input">
                <label for="">Nama Rekening</label>
                <div class="ket"> Tahajjudin Fajri </div>    
            </div>
        </div>

        <div class="input-boxpopup">
            <div class="input">
                <label for="">Total yang harus dibayar</label>
                <div class="ket"> 1000000</div>    
            </div> 

            <div class="input">
                <label for="">upload bukti pembayaran</label>
                <div class="upload-box">
                    <input type="file" name="" id="upload">                    
                </div>  
            </div> 
        </div>

        <p>
            Pembayaran dapat dilakukan melalui: <br>
            *Nama bank: BCA <br>
            *Nomor Rekening: 8950299399 <br>
            *Atas Nama: Agus Prasetyo
        </p>

        <div class="input">
            <label for="">Status Pembayaran</label>
            <div class="ket"> Silakhan Upload bukti pembayaran dulu</div>    
        </div>
        
        <div class="submit-pembayran">
            <a href="#box-pemby"><button type="button">keluar</button></a>
            <button type="submit" class=".blue">Simpan Perubahan</button>
        </div>
     </form>
</div>
<!-- ====== pop up akhir ======= -->

</form>
<!-- Akhir konten-->


<footer>
    <div class="copyright">
        <h4><a href="#">Sistem Informasi Lomba</a></h4>
        <i class="fa fa-copyright" aria-hidden="true"> Template by: <a href="#">Kelompok 4</a></i>
    </div>
</footer>

<script src="{{ asset('assets_frontend/js/style.js') }}"></script>
</body>
</html>