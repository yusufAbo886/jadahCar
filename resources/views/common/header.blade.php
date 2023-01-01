<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Title -->
    <!-- Required Meta Tags Always Come First -->
    <meta charset="UTF-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <title> dsfew</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link href="http://fonts.cdnfonts.com/css/gotham" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('asset/nav.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/style.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/responsive.css') }}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.theme.min.css">








</head>

<body >
<header class="all">
    <div class="languge d-none d-md-block">
        <div class="container">
            <div class="row">
                <div class="col">logo</div>
                <div class="col log">
                    @if(Auth::check())
                    <p>  <a href="{{ route('logout') }}" class="login">
                            <img height="20px" width="20px" src="{{ asset('asset/img/user.png') }}" alt="">
                               تسجيل الخروج
                        </a>
                    </p>
                    @else
                        <p>  <a href="/buyer-login" class="login">
                                <img height="20px" width="20px" src="{{ asset('asset/img/user.png') }}" alt="">
                                تسجيل الدخول
                            </a>
                        </p>
                    @endif
                </div>
            </div>
        </div>
    </div>

    <nav class="navbar navbar-expand-md navbar-light">
        <button id="dene" class="navbar-toggler collapsed" type="button" data-toggle="offcanvas">
            <span> </span>
            <span> </span>
            <span> </span>
        </button>
        <a href="#" class="login d-xl-none"><img height="20px" width="20px" src="{{ asset('asset/img/user.png') }}" alt="">login/sgin up</a>
        <div class="navbar-collapse offcanvas-collapse " id="navbarsExampleDefault">
            <li class="langs d-xl-none">
                <a class="lang" href="#">EN</a>
                <a class="lang" href="#">العربية</a>


            </li>
            <ul class="navbar-nav mr-auto">

                <li class="nav-item">
                    <a class="nav-link" href="#">SCHOOLS</a>
                    <p class="smls d-xl-none">KINDERGARTEN </p>
                    <p class="smls d-xl-none"> INTERNATIONAL </p>
                    <p class="smls d-xl-none"> SCHOOLS PRIVATE SCHOOLS</p>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">LANGUAGE SCHOOLS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">TEACHER SQUAD</a>
                </li>

                <a class="adds d-xl-none" href="#">ABOUT US</a>
                <a class="adds d-xl-none" href="#">BLOG</a>
                <a class="adds d-xl-none" href="#">CONTACT US</a>
            </ul>

        </div>
    </nav>
</header>

