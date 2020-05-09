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
            @forelse($data as $event)
            <div class="item-katalog">
                <div class="item">
                    <a href="{{ route('frontend.event.detailevent', ['url' => $event->url]) }}">
                        <img src="{{ asset('image/'. $event->foto) }}" alt="">
                        <label for="">{{ $event->nama_or }}</label>
                    </a>
                </div>
                @empty 
            </div>
            @endforelse
    </div>
    <div class="more">
        <a href="{{ route('frontend.event.index') }}">
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

 @include('layouts.frontendfooter')


<script src="{{ asset('assets_frontend/js/style.js') }}"></script>
</body>
</html>