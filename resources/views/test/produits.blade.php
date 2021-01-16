@extends('test.bar')


@section('produits')
<section id="produits">
<div class="container">
    <div class="row">
    @foreach($products as $product)
        <div class="col-lg-3 col-sm-4 col-11 offset-sm-0 offset-1 pt-3">
            <div class="card">
            <img class="card-img-top" src="storage/{{ $product->pic }}" alt="Card image cap">
                <div class="card-body">
                    <p class="card-text">{{$product->title}}</p>
                    <p>{{$product->price}}</p>
                    <button class="btn btn-outline-danger btn-block">
                    <a title="Add to cart" href="{{route('add-to-cart',$product->id)}}">加入購物車</a></button>
                </div>
            </div>
        </div>
@endforeach
        {{-- <div class="col-lg-3 col-sm-4 col-11 offset-sm-0 offset-1">
            <div class="card"> <img class="card-img-top" src="https://images.pexels.com/photos/963486/pexels-photo-963486.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt="Card image cap">
                <div class="card-body">
                    <p class="card-text">Wooden chair with legs</p>
                    <p>$90</p>
                    <button class="btn btn-outline-danger btn-block">加入購物車</button>
                </div>
            </div>
        </div>

        <div class="col-lg-3 col-sm-4 col-11 offset-sm-0 offset-1">
            <div class="card"> <img class="card-img-top" src="https://images.pexels.com/photos/963486/pexels-photo-963486.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt="Card image cap">
                <div class="card-body">
                    <p class="card-text">Wooden chair with legs</p>
                    <p>$90</p>
                    <button class="btn btn-outline-danger btn-block">加入購物車</button>
                </div>
            </div>
        </div>

        <div class="col-lg-3 col-sm-4 col-11 offset-sm-0 offset-1">
            <div class="card"> <img class="card-img-top" src="https://images.pexels.com/photos/963486/pexels-photo-963486.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt="Card image cap">
                <div class="card-body">
                    <p class="card-text">Wooden chair with legs</p>
                    <p>$90</p>
                    <button class="btn btn-outline-danger btn-block">加入購物車</button>
                </div>
            </div>
        </div> --}}
    </div>
</section>
@endsection

