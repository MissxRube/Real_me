@extends('front.bar')

@section('homecontent')



                <div class="bg-image text-center">

                        <video src="{{ asset($k[0]->viedo) }}" loop autoplay muted class=" embed-responsive-item" width="100%"  height="100%"></video>

                </div>

               

                <div class="row bg-image">

                        {{-- <div class="col-12 h1 text-center pt-5">{{$cgy->title}}</div> --}}

                       

                        <div class="col-12 h1 text-center pt-4 text-h1 pb-4 " style="font-family: 'Dancing Script', cursive;">{{$k[0]->title}} </div>

                        <div class="col-8 offset-2 text-center pt-2 text-gold h1  " id="movefont" style="font-family: 'Dancing Script', cursive;"> {{$k[0]->topproducttag}}</div>

                        {{-- 請放入商品topproduct1~4 --}}

                        <div class="col-12 infobox position-absolute " style="top:180%">
                                <div class="border bg-infode"  id="infobar">
                                                                <!-- p-0清邊框 m-1外邊框劉1  -->
                                        <div class="col-8 offset-2  mx-auto">
                                                <div class="d-flex align-items-center ">
                                                        <button  class="text-left mr-5 pr-1 pl-1" id="close" >
                                                                <span class="h4">&times;</span>
                                                        </button>
                                                                        <!-- viedo的響應式embed-responsive  -->
                                                        <h3 class="text-center pl-4 pt-4">珍稀花材 -- 格拉斯茉莉，是J'adore的香氣核心。</h3>

                                                </div>
                                                        
                                                <div class="embed-responsive embed-responsive-16by9 pb-5">
                                                        <video src="https://secure.massmotionmedia.com/diorparfums/projects/diorparfums_film_savoir_faire_jasmin_en/videos/20200219174729_960x540_1300_45f543de-525c-468f-8480-a81b69f0da90.mp4" loop autoplay muted class=" embed-responsive-item"></video>
                                                </div >
                                                                                

                                        </div>
                                </div>
                        </div>   

                        <div class="col-8 offset-2 h5 text-center wow fadeInUp"><a href="#"><img src="{{asset($k[0]->topproductpic)}}" alt="" class="img-fluid"></a></div>
                        <div class=" offset-5 col-2 "><button  class="btn  top-decoration" id="infobtn" >探索</button></div>
                    

                                
                       
                      
                             

                        <div class="col-12  bg-image mt-5 row" style="overflow: hidden">
                                 {{-- 請放入商品people1~4 --}}
                                <div class="col-4 offset-2 pt-5 "><img src="{{asset($k[0]->peoplepic)}}" alt="./" class="img-fluid slide-left"></div>
                                <div class="col-4  ">
                                        <div class="col-12 h3 text-center text-white"style="margin-top:30%;">形象代言人</div>

                                        <div class="col-12 h5 text-center pt-5 bg-transfer slide-right">
                                                {{-- 放入代言人  Spokesperson --}}

                                                <h4>{{$k[0]->peoplename}}</h4>
                                                {{-- 放入代言人  Spokesperson_info --}}
                                                <p>{{$k[0]->peopledesc}}</p>
                                        </div>
                                </div>
                        </div>
                        <div class="col-12 row bg-image pb-5" style="overflow: hidden">
                                <div class="col-4 offset-2  ">
                                        <div class="col-12 h3 text-center text-white "style="margin-top:30%;">首席調香師</div>
                                        <div class="col-12 h5 text-center bg-transfer pt-5 slide-left">
                                                 <h4>首席調香師 François Demachy</h4>
                                                 {{-- 放入代言人  Demachy_info --}}
                                                <p>{{$k[0]->Demachydesc}}</p>
                                        </div>
                                </div>
                                <div class="col-4  pt-5 "><img src="{{asset('storage/index/people5.jpg')}}" alt="./" class="img-fluid slide-right "></div>
                        </div>

                        <div class="col-12 ">
                                {{-- banner1~4 --}}
                                <img src="{{asset($k[0]->bannerpic)}}" alt="" class="img-fluid ">
                        </div>

                </div>
        </div>
        <div class="container">
                <div class="col-12 h1 text-center pt-5 ">商品列表</div>
                <div class="col-12 row pt-5 mt-3 mb-5">
                @foreach($products as $product)
                        <div class="  col-3 slide-up">
                               <div class="col-12 product-box bg-dark">
                                        <a href="#" class="product-a ">
                                                <!-- <img src="{{asset('storage/index/product01.jpg')}}" alt="" class="img-fluid product-img"> -->
                                                <img src="storage/{{$product->pic}}" alt="" class="img-fluid product-img">
                                                <div class="product-info">
                                                        <a href="#"><h4>{{$product->title}}</h4>
                                                                
                                                                <h5 >價格：${{$product->price}}</h4 >
                                                               
                                                        </a>
                                                </div>
                                        </a>
                                </div>
                        </div>
                @endforeach
                  </div>
                 


        </div>

@stop

