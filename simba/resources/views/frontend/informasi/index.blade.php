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

<body>
    @include('layouts.frontendnavbar')

    <script src="{{ asset('assets_frontend/js/style.js') }}"></script>

</body>

<script>
    $(document).ready(function(){      
        $('.eventt').hide();
    });
  </script>
</html>