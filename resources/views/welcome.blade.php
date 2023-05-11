<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>



{{--
Lorem ipsum dolor sit amet consectetur adipisicing elit.
 Necessitatibus reiciendis minima cum obcaecati,
 aliquam itaque ullam suscipit magnam quia explicabo asperiores odio
 eos, rem quod deserunt doloribus corporis? Accusantium, modi? --}}



    <body class="antialiased">
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            {{-- @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
        </div> --}}



        <nav class="navbar navbar-expand-lg fixed-top bg-light">
            <div class="container">
                <a href="#" class="navbar-brand nav-dark ">
                    <img src="picture/logo.png" class="d-line-block rounded-circle align-top" width="30px" height="30px"> Tracking System
                </a>


                <button class="navbar-toggler navbar-light" type="button" data-bs-toggle="collapse" data-bs-target="#navmenu" >
                    <span class="navbar-toggler-icon"></span>
                </button>
                <!-- Hereeeeee -->
                <div class="collapse navbar-collapse" id="navmenu">
                    <ul class="navbar-nav ms-auto ">
                        <li class="nav-item">
                            <a href="#home" class="nav-link"> <i class='bx bxs-home-smile'></i>Home</a>
                        </li>
                        <li class="nav-item">
                            <a href="#questions" class="nav-link"><i class='bx bx-question-mark'></i>About us</a>
                        </li>
                        <li class="nav-item">
                            <a href="#instructors" class="nav-link"><i class='bx bxs-calendar-plus' ></i>Contact</a>
                        </li>
                        <li class="nav-item">

                        </li>





@guest
{{-- paG HINID PA NAKA LLGIN UNG USER MAGPAPKITA TO --}}
   <li class="nav-item">
                            <a href="{{url('login') }}" class="nav-link"><b><i class='bx bxs-log-in-circle'></i>Log In</b></a>
                        </li>

                        <li class="nav-item">
                            <a  href="{{url('register') }}" class="nav-link"><b><i class='bx bxs-log-in-circle'></i>Register</b></a>
                        </li>

                        @else
       {{-- pAG NAKALOGIN NA MAGPAPAKITA TO --}}
                        <li class="nav-item">
                            <a  href="{{url('home') }}" class="nav-link"><b><i class='bx bxs-log-in-circle'></i>Dashboard</b></a>
                        </li>
@endguest




                    </ul>

                </div>
            </div>
        </nav>
       <br><br><br><br>
<section id="hero" class="hero d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center">
          <div data-aos="fade-up" data-aos-delay="600">
            <div class="text-center text-lg-start">
              <a href="#about" class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center">
                <i class="bi bi-arrow-right"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="col-lg-6 hero-img" data-aos="zoom-out" data-aos-delay="200">
          <img src="assets/img/hero-img.png" class="img-fluid" alt="">
        </div>
      </div>
    </div>

  </section>
              {{-- class="d-flex flex-column flex-md-row text-center text-md-start justify-content-between py-4 px-4 px-xl-5 bg-primary">
              <!-- Copyright -->
              <div class="text-white mb-3 mb-md-0">
                Copyright © 2020. All rights reserved.
              </div>
              <!-- Copyright --> --}}

              <!-- Right -->
              {{-- <div>
                <a href="#!" class="text-white me-4">
                  <i class="fab fa-facebook-f"></i>
                </a>
                <a href="#!" class="text-white me-4">
                  <i class="fab fa-twitter"></i>
                </a>
                <a href="#!" class="text-white me-4">
                  <i class="fab fa-google"></i>
                </a>
                <a href="#!" class="text-white">
                  <i class="fab fa-linkedin-in"></i>
                </a>
              </div> --}}
              <!-- Right -->
            </div>
            </div>
          </section>

    </body>
    </html>

{{--

@endsection --}}
