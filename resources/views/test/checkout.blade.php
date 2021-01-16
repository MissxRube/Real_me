<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<section class="shop checkout section">
    <div class="container">
        <form class="form" method="POST" action="{{route('cart.order')}}">
            @csrf
            <div class="row">
                <div class="col-lg-8 col-12">
                    <div class="checkout-form">
                        <h2>結帳資料</h2>
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="form-group">
                                    <label>姓名<span>*</span></label>
                                    <input type="text" name="name" placeholder="請輸入姓名" value="{{old('name')}}" value="{{old('name')}}">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="form-group">
                                    <label>Email<span>*</span></label>
                                    <input type="email" name="email" placeholder="請輸入電子信箱" value="{{old('email')}}" required>
                                    @error('email')
                                    <span class='text-danger'>{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="form-group">
                                    <label>聯絡電話<span>*</span></label>
                                    <input type="text" name="phone" placeholder="請輸入聯絡電話" required value="{{old('phone')}}">
                                    @error('phone')
                                    <span class='text-danger'>{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="form-group">
                                    <label>城市<span>*</span></label>
                                    <select name="country" id="country" required>
                                        <option value="基隆市">基隆市</option>
                                        <option value="臺北市">臺北市</option>
                                        <option value="新北市">新北市</option>
                                        <option value="桃園市" selected>桃園市</option>
                                        <option value="新竹市">新竹市</option>
                                        <option value="新竹縣">新竹縣</option>
                                        <option value="苗栗縣">苗栗縣</option>
                                        <option value="臺中市">臺中市</option>
                                        <option value="彰化縣">彰化縣</option>
                                        <option value="南投縣">南投縣</option>
                                        <option value="雲林縣">雲林縣</option>
                                        <option value="嘉義市">嘉義市</option>
                                        <option value="嘉義縣">嘉義縣</option>
                                        <option value="臺南市">臺南市</option>
                                        <option value="高雄市">高雄市</option>
                                        <option value="屏東縣">屏東縣</option>
                                        <option value="臺東縣">臺東縣</option>
                                        <option value="花蓮縣">花蓮縣</option>
                                        <option value="宜蘭縣">宜蘭縣</option>
                                        <option value="澎湖縣">澎湖縣</option>
                                        <option value="金門縣">金門縣</option>
                                        <option value="連江縣">連江縣</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="form-group">
                                    <label>收貨地址<span>*</span></label>
                                    <input type="text" name="address" placeholder="請輸入收貨地址" value="{{old('address')}}">
                                    @error('address')
                                    <span class='text-danger'>{{$address}}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="form-group">
                                    <label>備註</label>
                                    <input type="text" name="message" value="{{old('other')}}">
                                    @error('message')
                                    <span class='text-danger'>{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="form-group">
                                    <label>郵遞區號</label>
                                    <input type="text" name="post_code" placeholder="" value="{{old('post_code')}}">
                                    @error('post_code')
                                    <span class='text-danger'>{{$post_code}}</span>
                                    @enderror
                                </div>
                            </div>

                        </div>
                        <!--/ End Form -->
                    </div>
                </div>
                <div class="col-lg-4 col-12">
                    <div class="order-details">
                        <!-- Order Widget -->
                        <div class="single-widget">
                            <h2>總金額</h2>
                            <div class="content">
                                <ul>
                                    <li class="order_subtotal" data-price="{{$totalPrice}}">
                                        購物車金額<span>${{number_format($totalPrice)}}</span></li>
                                    <li class="shipping">
                                        運送方式：
                                        @if($totalPrice>5000)
                                        <select name="shipping" class="nice-select" value="請選擇運送方式" required>
                                            <option value="0" disabled selected hidden>請選擇運送方式</option>
                                            @foreach($shippings as $shipping)
                                            <option value="{{$shipping->id}}" class="shippingOption" data-price="0">{{$shipping->type}}</option>
                                            @endforeach
                                        </select>
                                        <span>滿額，免運費</span>
                                        @else
                                        <select name="shipping" class="nice-select" value="請選擇運送方式" required>
                                            <option value="0" data-price="0" disabled selected hidden>請選擇運送方式</option>
                                            @foreach($shippings as $shipping)
                                            <option value="{{$shipping->id}}" class="shippingOption"
                                                data-price="{{$shipping->price}}">{{$shipping->type}}:
                                                ${{$shipping->price}}</option>
                                            @endforeach
                                        </select>
                                        @endif
                                    </li>
                                    <li class="last" id="order_total_price">
                                        付款金額<span>${{number_format($totalPrice)}}</span></li>
                                </ul>
                            </div>
                        </div>
                        <!--/ End Order Widget -->
                        <!-- Order Widget -->
                        <div class="single-widget">
                            <h2>付款方式</h2>
                            <div class="content">
                                <select name="payment" class="" required>
                                  <option value="0" data-price="0" disabled selected hidden>請選付款方式</option>
                                  @foreach($payments as $payment)
                                    <option value="{{$payment->id}}" class="">{{$payment->type}}</option>
                                  @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="single-widget get-button">
                            <div class="content">
                                <div class="button">
                                    <button type="submit" class="btn">立即結帳</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</section>
<!--/ End Checkout -->
  <script src="{{ asset('js/jquery.js') }}"></script>
<script>
    $(document).ready(function () {
        $('.shipping select[name=shipping]').change(function () {
            var cost = parseInt($(this).find('option:selected').data('price'));
            var subtotal = parseInt($('.order_subtotal').data('price'));
            $('#order_total_price span').text('$' + (cost+subtotal));
        });
    });
</script>
</body>
</html>
