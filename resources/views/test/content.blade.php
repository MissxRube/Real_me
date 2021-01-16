@extends('front.bar')

@section('homecontent')
                <div class="bg-dark text-center">
                        <video src="{{ asset($k[0]->viedo) }}" loop autoplay muted class=" embed-responsive-item" width="100%"  height="100%"></video>
                </div>
                <div class="row">
                        <div class="col-12 h1 text-center pt-5">{{$k[0]->title}} </div>
                        <div class="col-8 offset-2 h5 text-center pt-2">{{$k[0]->topproductname}}</div>
                        <div class="col-12 h1 text-center pt-5" style="font-family: 'Dancing Script', cursive;">{{$k[0]->topproductname}}</div>
                        <div class="col-8 offset-2 h4 text-center pt-2 text-gold" id="movefont" style="font-family: 'Dancing Script', cursive;"> {{$k[0]->topproducttag}}</div>

                        {{-- 請放入商品topproduct1~4 --}}

                        <div class="col-8 offset-2 h5 text-center wow fadeInUp"><a href="#"><img src="{{asset($k[0]->topproductpic)}}" alt="" class="img-fluid"></a></div>



                        <div class=" offset-5 col-2 "><a href="#" class="btn  top-decoration">詳請</a></div>
                        <div class="col-12 row bg-image mt-5">
                                 {{-- 請放入商品people1~4 --}}
                                <div class="col-4 offset-2 pt-5 "><img src="{{asset($k[0]->peoplepic)}}" alt="./" class="img-fluid wow fadeInLeft"></div>
                                <div class="col-4">
                                        <div class="col-12 h3 text-center text-white"style="margin-top:30%;">形象代言人</div>

                                        <div class="col-12 h5 text-center p-5 bg-transfer wow fadeInRight">
                                                {{-- 放入代言人  Spokesperson --}}
                                                <h4>{{$k[0]->peoplename}}</h4>
                                                {{-- 放入代言人  Spokesperson_info --}}
                                                {{$k[0]->peopledesc}}
                                        </div>
                                </div>
                        </div>
                        <div class="col-12 row bg-image pb-5">
                                <div class="col-4 offset-2  ">
                                        <div class="col-12 h3 text-center text-white "style="margin-top:30%;">首席調香師</div>
                                        <div class="col-12 h5 text-center bg-transfer p-5 wow fadeInLeft">
                                                 <h4>首席調香師 François Demachy</h4>
                                                 {{-- 放入代言人  Demachy_info --}}
                                                {{$k[0]->Demachydesc}}
                                        </div>
                                </div>
                                <div class="col-4  pt-5 "><img src="{{asset('storage/index/people5.jpg')}}" alt="./" class="img-fluid wow fadeInRight "></div>
                        </div>

                        <div class="col-12 ">
                                {{-- banner1~4 --}}
                                <img src="{{asset($k[0]->bannerpic)}}" alt="" class="img-fluid ">
                        </div>

                </div>
        </div>
        <div class="container">
                <div class="col-12 h1 text-center pt-5 ">商品列表</div>
                <div class="col-12 row pt-5 ">
                @foreach($products as $product)
                        <div class=" offset-2 col-3 wow fadeInUp">
                               <div class="col-12 product-box">
                                        <a href="#" class="product-a">
                                                <img src="storage/{{$product->pic}}" alt="" class="img-fluid product-img">
                                                <div class="product-info">
                                                        <a href="#"><h3 >{{$product->title}}</h3>
                                                                <!-- <ul class="d-flex justify-content-start ">濃郁度:
                                                                        {{-- {{$product->richness}} --}}
                                                                        <li class=" ml-4 pl-3"></li>
                                                                        <li class=" pl-3"></li>
                                                                </ul> -->
                                                                <h5 >$ {{$product->price}}</h4 >
                                                                <h6 >滾珠瓶 20 ML</h5 >
                                                        </a>
                                                </div>
                                        </a>
                                </div>
                        </div>
                @endforeach
                  </div>


        </div>

@stop

