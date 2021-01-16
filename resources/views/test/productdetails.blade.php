@extends('test.bar')

@section('productdetails')


<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-12">
            <div class="row">
                <div class="col-6">
                    <p><img src="https://fakeimg.pl/500x400/" ></p>
                </div>
                <div class="col-6">
                    <h1 class="">J'ADORE</h1>
                    <p>精萃香氛</p>
                    <hr>

                    <div class="form-group row">
                        <label class="col-2">金額</label>
                        <div class="col">5000</div>
                    </div>

                    <button class="btn btn-outline-danger btn-block">訂購</button>

                </div>
            </div>
            <div class="row">
            <div class="col-12">
            <h4 class="text-center m-5">宛如一曲撩撥感官的美麗頌歌</h4>
            <div class="m-2"><img src="https://fakeimg.pl/1920x1080/" class="img-responsive  center-block"></div>
            <div class="m-2"><img src="https://fakeimg.pl/1920x1080/" class="img-responsive  center-block"></div>
            </div>

            </div>

        </div>
    </div>
</div>

@endsection
