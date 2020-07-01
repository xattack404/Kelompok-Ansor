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
<form class="box-lomba">
    <div class="info-lomba">    

    </div>
    <div class="img">
        <img src="{{ asset('image/'. $data['cabang_olahraga']->foto) }}" alt="">    
    </div>
    <div class="konten-lomba ">
        <h3>{{ $data['cabang_olahraga']->nama_or }}</h3>
        <p><label for="">KATEGORI :</label> {{ $data['cabang_olahraga']->relasiKategori->nama_kategori }}</p>
        <p><label for="">TANGGAL :</label> {{ $data['cabang_olahraga']->tanggal_pelaksanaan }}</p>
        <p><label for="">Contact :</label> -- </p>
        <p><label for="">KETERANGAN : <br> <br></label>
        {{ $data['cabang_olahraga']->deskripsi }}
        </p>
        <a href="{{ route('frontend.registrasi.index')}}"><button type="button">Registrasi</button></a>
    </div>
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
<script>
    $(document).ready(function(){      
        $('.eventt').hide();
    });
  </script>
</html>