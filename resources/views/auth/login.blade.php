<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
<meta name="description" content="POS - Bootstrap Admin Template">
<meta name="keywords" content="admin, estimates, bootstrap, business, corporate, creative, invoice, html5, responsive, Projects">
<meta name="author" content="Dreamguys - Bootstrap Admin Template">
<meta name="robots" content="noindex, nofollow">
<title>Login - Pos admin template</title>

<link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">

<link rel="stylesheet" href="assets/css/bootstrap.min.css">

<link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
<link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">

<link rel="stylesheet" href="assets/css/style.css">
</head>
<body class="account-page">

<div class="main-wrapper">
<div class="account-content">
<div class="login-wrapper">
<div class="login-content">
<div class="login-userset">
<div class="login-logo">
<img src="assets/img/logo/evote-logo.png" alt="img">
</div>
<div class="login-userheading">
<h3>Sign In</h3>
<h4>Please login to your account</h4>
</div>

@extends('layouts.app')

@section('content')

<form method="POST" action="{{ route('login') }}">
    @csrf

    <div class="form-login">
        <label for="email" class="">{{ __('Email Address') }}</label>

        <div class="form-addons">
            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
            <img src="assets/img/icons/mail.svg" alt="img">
            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>

    <div class="form-login">
        <label for="password" class="">{{ __('Password') }}</label>

        <div class="pass-group">
            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
            <span class="fas toggle-password fa-eye-slash"></span>
            @error('password')
                <span class="fas toggle-password fa-eye-slash" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>

    <div class="row md-3">
        <div class="col-md-6">
            <div class="form-check">
                <input class="hover-a" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                <label class="form-check-label" for="remember">
                    {{ __('Remember Me') }}
                </label>
            </div>
        </div>

        @if (Route::has('password.request'))
        <a class="alreadyuser" href="{{ route('password.request') }}">
            {{ __('Forgot Your Password?') }}
        </a>
        @endif
        
    </div>
    
    

    <div class="form-login">
        <div class="col-md-12">
            <button type="submit" class="btn btn-login">
                {{ __('Login') }}
            </button>
        </div>
    </div>
</form>
</div>
</div>
<div class="login-img">
    <img src="assets/img/login/cotecoverC.jpg" alt="img">
    </div>
</div>
</div>
</div>


<script src="assets/js/jquery-3.6.0.min.js"></script>

<script src="assets/js/feather.min.js"></script>

<script src="assets/js/bootstrap.bundle.min.js"></script>

<script src="assets/js/script.js"></script>
</body>
</html>