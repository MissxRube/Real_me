<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

        <link rel="stylesheet" href="{{asset('index/css/mine.css')}}">
        <link rel="stylesheet" href="{{asset('index/css/login.css')}}">
        <link rel="stylesheet" href="{{asset('index/css/animate.css')}}"/>

        {{-- 字體 --}}
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" >

        <script src="{{asset('index/js/wow.js')}}"></script>
        <script src="{{asset('index/js/login.js')}}"></script>

        <!-- Option 2: jQuery, Popper.js, and Bootstrap JS-->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>


        <script>

                new WOW().init();

        </script>
</head>
<body>
        <div class="cotainer-fulid ">

                <nav class="navbar navbar-expand-sm ">

                        <h1 class="navbar-brand  logostyle "id="logo " style="font-family: 'Dancing Script', cursive;"><a href="{{url('/')}}">Real me</a></h1>
                        <button data-toggle="collapse" data-target='#submenu' class='navbar-toggler'><span class="navbar-toggler-icon"></span></button>
                        <div class='navbar-collapse collapse justify-content-end ' id='submenu'>
                                <ul class='navbar-nav'>
                                        <li class="nav-item"><a href="{{url('/login')}}" class="nav-link "><i class="fas fa-user"></i></a></li>
                                        <li class="nav-item"><a href="{{url('/cart')}}" class="nav-link"><i class="fas fa-shopping-cart"></i></a></li>
                                </ul>
                        </div>
                </nav>

                <div class="row">
                        <div class="col-12 bar-img row text-center pb-5">


                                <div class="offset-2 col-2 "style="font-family: 'Dancing Script', cursive;"><a href="{{url('/')}}">J'ADORE</a></div>
                                <div class="col-2" style="font-family: 'Dancing Script', cursive;"><a href="{{url('/')}}">MISS DIOR </a></div>
                                <div class="col-2 " style="font-family: 'Dancing Script', cursive;"><a href="{{url('/')}}">JOY BY DIOR</a> </div>
                                <div class="col-2 " style="font-family: 'Dancing Script', cursive;"><a href="{{url('/')}}">SAUVAGE</a></div>


                        </div>
                </div>



                @yield('logincontent')
                @yield('login')



                <div class="row  bg-dark border-top">
                        <div class="col-12  bg-footer row " >
                                <div class="col-12 text-center " >
                                        <i class="fab  fa-twitter fa-2x socialIcon pt-1" ></i>
                                        <i class="fab fa-facebook  fa-2x  socialIcon pt-1"></i>
                                        <i class="fab fa-instagram fa-2x  socialIcon pt-1"></i>
                                        <i class="fab fa-vimeo fa-2x  socialIcon pt-1"></i>
                                        <i class="fab fa-youtube fa-2x  socialIcon pt-1"></i>
                                        <p class='text-gold'>&copy;Allright</p>
                                </div>
                        </div>
                </div>
        </div>
</body>


</html>
