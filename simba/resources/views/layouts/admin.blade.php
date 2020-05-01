<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin</title>
    <link rel="stylesheet" href="{{ asset('assets_admin/styleadmin.css') }}">
    <link rel="stylesheet" href="{{ asset('assets_admin/fontawesome/css/all.min.css') }}">
    <!-- jquery -->
    
</head>
<body>
@include('layouts.admin_sidebar')  
<!-- konten -->
<div class="content-box">
    <div class="content" id="konten">
        <h1>admin pannel</h1>
        <!-- isi konten di sini -->        
        @yield('content')

    </div>
</div>
<!-- konten -->
</body>
<script src="{{ asset('assets_admin/js/jquery-3.4.1.min.js') }}"></script>

</html>