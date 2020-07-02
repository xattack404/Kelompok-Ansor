<!DOCTYPE html>
<html lang="en" id="home">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi</title>
    <link rel="stylesheet" href="{{ asset('assets_frontend/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets_frontend/fontawesome/css/all.min.css') }}">
    <!-- jquery -->
    <script src="{{ asset('assets_frontend/js/jquery-3.4.1.min.js') }}"></script>
</head>

<body style="">
    @include('layouts.frontendnavbar')
    <div class="tim-dev">
        <h1>team development</h1>
    </div>
    <div class="container-informasi">
        <div class="foto">
            <div class="keterangan">
                <span>Name: tahajjudin Fajri</span>
                <span>NIM: E41182137</span>
            </div>
        </div>
        <div class="foto">
            <div class="keterangan">
                <span>Name: Lambang Arinanda</span>
                <span>NIM: E41181803</span>
            </div>
        </div>
        <div class="foto">
            <div class="keterangan">
                <span>Nama: Fauziyatur Rohmah</span>
                <span>NIM: E41181624</span>
            </div>
        </div>
        <div class="foto">
            <div class="keterangan">
                <span>Nama: Muhammad Farhan</span>
                <span>NIM: E41181773</span>
            </div>
        </div>
        <div class="foto">
            <div class="keterangan">
                <span>Nama: Muhammad Ansori </span>
                <span>NIM: E41182048</span>
            </div>
        </div>
        
    </div>
    <script src="{{ asset('assets_frontend/js/style.js') }}"></script>

</body>

<script>
    $(document).ready(function(){      
        $('.eventt').hide();
    });
  </script>
</html>