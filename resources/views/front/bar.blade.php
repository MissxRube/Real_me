<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
	integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
		integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
		crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

        <link rel="stylesheet" href="{{asset('index/css/index.css')}}">
        <link rel="stylesheet" href="{{asset('index/css/mine.css')}}">

        <link rel="stylesheet" href="{{ asset('details/css/detail.css') }}">

        <script src="{{asset('index/js/wow.js')}}"></script>
        <script src="{{asset('details/js/detail.js')}}"></script>
        <script src="{{asset('index/js/scrollreveal.js')}}"></script>
        <script src="{{asset('index/js/index.js')}}"></script>
        {{-- 字體 --}}
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&display=swap" rel="stylesheet">
        {{-- icon --}}
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" >
        <!-- Option 2: jQuery, Popper.js, and Bootstrap JS-->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        {{-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script> --}}
        <script src="{{asset('index/js/jquery-1.8.3.min.js')}}"></script>

        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="{{asset('index/js/jquery.ghosttype-1.2.js')}}"></script>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" >

        <script src="{{asset('index/js/wow.js')}}"></script>
        <script src="{{asset('details/js/detail.js')}}"></script>


        <script>

                new WOW().init();

        </script>
</head>
<body>
        <div class="cotainer-fulid">
                <nav class="navbar navbar-expand-sm  ">
                        <h1 class="navbar-brand  logostyle "id="logo " style="font-family: 'Dancing Script', cursive;"><a href="{{url('/')}}">Real me</a></h1>
                        <button data-toggle="collapse" data-target='#submenu' class='navbar-toggler'><span class="navbar-toggler-icon"></span></button>
                        <div class='navbar-collapse collapse justify-content-end ' id='submenu'>
                                <ul class='navbar-nav'>
                                        @if(Auth::check())
                                        <li class="nav-item"><a href="{{url('/mylogout')}}" class="nav-link " ><i class="fas fa-dungeon" title="登出"></i></a></li>
                                        <li class="nav-item"><a href="{{url('/admin')}}" class="nav-link"><i class="fas fa-igloo" title="會員專區"></i></a></li>
                                        @else
                                        <li class="nav-item"><a href="{{url('/login')}}" class="nav-link " ><i class="fas fa-user" title="登入"></i></a></li>
                                        @endif
                                        <li class="nav-item"><a href="{{url('/cart')}}" class="nav-link"><i class="fas fa-shopping-cart" title="購物車"></i><span class="total-count">({{App\Http\Controllers\HomeController::cartCount()}})</span></a></li>

                                </ul>
                        </div>
                </nav>
               <div class="row">
                        <div class="col-12 bar-img row text-center pb-3 ">

                                <div class="offset-2 p-2 col-2  btn1"style="font-family: 'Dancing Script', cursive;" ><a href="{{url('/')}}">J'ADORE</a></div>
                                <div class="col-2 p-2 btn2" style="font-family: 'Dancing Script', cursive;"><a href="{{url('/gethome1')}}">MISS DIOR </a></div>
                                <div class="col-2  p-2  btn3" style="font-family: 'Dancing Script', cursive;"><a href="{{url('/gethome2')}}">JOY BY DIOR</a> </div>
                                <div class="col-2 p-2  btn4" style="font-family: 'Dancing Script', cursive;"><a href="{{url('/gethome3')}}">SAUVAGE</a></div>

                        </div>
                </div>
@if(session()->has('notice'))
          <div class="col-12 col-md-8 offset-md-2 notice py-3 text-center mt-2" style="background-color: rgba(202, 202, 200, 0.664)">
            {{session()->get('notice')}}
          </div>
@endif


        @yield('homecontent')
        @yield('productdetails')
        @yield('produits')
        @yield('cart')
        @yield('checkout')

        <!-- <div class="col-12 animate__animated animate__bounce animate__infinite top " id="top" > -->

        <div class="col-12 animate__animated animate__bounce top " id="top" >


               <a href="#logo"> <i class="fas fa-3x fa-chevron-circle-up" style="color: wheat"></i></a>
        </div>


        <div class="container-fluid ">
                <div class="row mt-5  bg-dark">
                        <div class="col-12  bg-footer row  " >
                                <h1 class="col-12 text-center text-gold pt-5 ">聖誕限定 線上旗艦店獨家服務</h1>
                                <div class="col-2 offset-3 text-center text-gold pt-4">
                                        <h4>聖誕限定包裝</h4><br>
                                        <img src="http://localhost/realme/storage/app/public/index/footer1.png" alt=""><br>
                                        凡消費即享聖誕限定包裝服務 (線上旗艦店每筆交易僅提供一組包裝，同一訂單恕無法分開包裝)。
                                </div>
                                <div class="col-2  text-center text-gold pt-4">
                                        <h4>客製化刻字服務</h4> <br>
                                        <img src="http://localhost/realme/storage/app/public/index/footer3.png" alt=""><br>
                                        訂製刻字服務，為您打造專屬贈禮，別緻體驗，讓心意永誌。
                                </div>
                                <div class="col-2  text-center text-gold pt-4">
                                        <h4>免費袖珍瓶贈禮</h4> <br>
                                        <img src="http://localhost/realme/storage/app/public/index/footer2.png" alt=""><br>
                                        凡消費即可挑選2款試用禮，讓您享受歡樂聖誕，滿額再享聖誕限定幸運星贈禮。
                                </div>





                        </div>
                        <div class="col-12 bg-image">

                                <img src="http://localhost/realme/storage/app/public/index/map.png" alt="" class="img-fluid">

                         </div>

                         <div class="col-12 text-center bg-image " >
                                 <i class="fab  fa-twitter fa-2x socialIcon pt-1" ></i>
                                 <i class="fab fa-facebook  fa-2x  socialIcon pt-1"></i>
                                 <i class="fab fa-instagram fa-2x  socialIcon pt-1"></i>
                                 <i class="fab fa-vimeo fa-2x  socialIcon pt-1"></i>
                                 <i class="fab fa-youtube fa-2x  socialIcon pt-1"></i>
                                 <p class='text-gold'>&copy;Allright</p>

                         </div>


                </div>

        </div>
</body>


</html>
