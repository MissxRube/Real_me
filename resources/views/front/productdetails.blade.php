@extends('front.bar')

@section('productdetails')


<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-12">
            <div class="row">
                <div class="col-6">
                    <p><img src="../storage/{{$products->pic}}" ></p>
                </div>
                <div class="col-6">
                    <h1 class="">{{$products->title}}</h1>
                    <!-- <p>精萃香氛</p> -->
                    <hr>

                    <div class="form-group row">
                        <label class="col-2">金額</label>
                        <div class="col">{{$products->price}}</div>
                    </div>

                    <button class="btn btn-outline-danger btn-block"><a href="{{route('add-to-cart',$products->id)}}">訂購</a></button>
                    <br>
                    <h4>商品描述</h3>
                    <hr>
                    <div style="background-color: rgba(170, 159, 159, 0.212)">{{$products->desc}}</div>
                    <img src="{{asset('storage/details/調香師.jpg')}}" alt="" style="width: 300px;" class="mt-2">
                </div>
            </div>
            <div class="row">
            <div class="col-12">
            <h4 class="text-center m-5">宛如一曲撩撥感官的美麗頌歌</h4>
            <div class="m-2"><img src="{{asset('storage/details/1.jpg')}}" class="img-responsive  center-block"></div>
            <div class="m-2"><img src="{{asset('storage/details/2.jpg')}}" class="img-responsive  center-block"></div>
            </div>

            </div>

        </div>
    </div>
</div>

@endsection
