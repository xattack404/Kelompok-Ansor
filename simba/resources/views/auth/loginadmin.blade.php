<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin</title>
    <link rel="stylesheet" href="{{ asset('assets_admin/styleadmin.css') }}">
    <link rel="stylesheet" href="{{ asset('assets_admin/fontawesome/css/all.min.css') }}">
    
</head>
<body>
    <form class="login-box" method="POST" action="{{ route('login') }}">
      @csrf
        <h1>login admin</h1>
        <div class="input">
            <label for="email">Email</label>
            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

            @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
        </div>
        <div class="input">
            <label for="password">password</label>
            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

            @error('password')
          <span class="invalid-feedback" role="alert">
          <strong>{{ $message }}</strong>
             </span>
            @enderror
        </div>
        <button type="submit">Login</button>
    </form> 
</body>
<!-- jquery -->
<script src="{{ asset('assets_admin/js/jquery-3.4.1.min.js') }}"></script>
</html>