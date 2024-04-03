<!DOCTYPE html>
<html lang="en">

<x-auth.header />

<style>
    .hero {
        background-image: linear-gradient(rgba(67, 69, 70, 0.3), rgba(0, 0, 0, 0.7)),
        url('{{ asset('img/hero.jpeg') }}');
        height: 250px;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
    }
</style>

<body class="signup-simple-template bg-gray-100">
    <div class="container-fluid">
        <img src="{{ asset('img/logo.png') }}" width="70" alt="Logo">
    </div>
    <div class="hero bg-primary signup-header text-center">
        <div class="text-white">
            <h1 class="text-white fs-1">GHANA</h1>
        </div>
    </div>
    <div class="container mt-10">
        <div class="simple-login-form rounded-12 shadow-dark-80 bg-white">
            {{ $slot }}
        </div>
    </div>

    <x-auth.footer />
</body>

</html>