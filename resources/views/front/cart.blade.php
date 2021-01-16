@extends('front.bar')

@section('cart')
<body>

	@if(session()->has('notice'))
          <div class="col-12 col-md-8 offset-md-2 notice py-3 text-center mt-2">
            {{session()->get('notice')}}
          </div>
	@endif

<h1 class="text-center pt-5">您的購物車</h1>

	<div class="shopping-cart section">
		<div class="container">
			<div class="row">
				<div class="col-12 mt-5">
					<table class="table shopping-summery table-hover">

						<thead>
							<tr class="main-hading">
								<th style="width:20%">產品</th>
								<th style="width:30%">名稱</th>
								<th  style="width:10%" class="text-center">價格</th>
								<th  style="width:20%" class="text-center">數量</th>
								<th  style="width:10%" class="text-center">總金額</th>
								<th  style="width:10%" class="text-center"><i class="ti-trash remove-icon"></i></th>
							</tr>
						</thead>

						<tbody id="cart_item_list">
							<form  action="{{route('cart.update')}}" method="POST">
                			@csrf
							@if($AllProducts)
								@foreach($AllProducts as $key=> $cart)
									<tr>
											<td class="image" data-title="No"><img src="{{ $cart->product->getFirstPicUrl() }}"></td>

									<td class="product-des" data-title="Description">
										<p class="product-name">
											<a href="{{route('detail',$cart->product['id'])}}" target="_blank">{{$cart->product['title']}}</a>
										</p>
									</td>
									<td class="price text-center" data-title="Price"><span>${{number_format($cart['price'])}}</span></td>

                  <td class="quantity-form" data-title="Qty">
										  <button type="button" class="decrement btn btn-number" data-type="minus" data-field="quant[{{$key}}]">
											<i class="fas fa-minus"></i>
										</button>
										<input type="text" name="quant[{{$key}}]" class="itxt text-center" style="width: 100px;" value="{{$cart->quantity}}">
										<input type="hidden" name="qty_id[]" value="{{$cart->id}}">
										<button type="button" class="increment btn btn-number" data-type="plus" data-field="quant[{{$key}}]"><i class="fas fa-plus"></i></button>

									</td>
									<td class="total-amount cart_single_price text-center" data-title="Total">
										<span class="money">${{$cart['amount']}}</span>
									</td>
									<td class="action" data-title="Remove">
										<a href="{{route('cart-delete',$cart->id)}}">
											<i class="fas fa-trash-alt"></i>
										</a>
									</td>
								</tr>
								@endforeach

								<track>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td class="float-right">
										<button class="btn float-right" type="submit">更新</button>
									</td>
								</track>

								@else
								<tr>
									<td class="text-center text-dark">
										<h3>空空蕩蕩的購物車......</h3>
									</td>
								</tr>
								@endif
							</form>
						</tbody>
					</table>
				</div>
			</div>

			<div class="row">
				<div class="col-12">
					<div class="total-amount">
						<div class="row">
							<div class="col-lg-4 col-md-7 col-12 offset-8">
								<div class="right">
									<ul>
										<li class="order_subtotal" style="list-style-type: none;" data-price="{{$totalPrice}}">購物金額：<span>${{number_format($totalPrice)}}</span></li>
									</ul>
									<div class="button5 mb-5 pb-5">
										<a href="{{url('/checkout')}}" class="btn btn-block btn-outline-danger">結帳</a>
										<a href="{{url('/test')}}" class="btn btn-block btn-outline-warning">繼續購物</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

		</div>
	</div>
</body>
@endsection
	  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
	integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
		integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
		crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">

<script>
    $(document).ready(function () {
      $('.increment').click(function () {
        var num = $(this).siblings('.itxt').val();
        num++;
        $(this).siblings('.itxt').val(num)
      })
      $('.decrement').click(function () {
        var num = $(this).siblings('.itxt').val();
        num--;
        if (num < 1) {
          num = 1;
        }
        $(this).siblings('.itxt').val(num);
      })
    })
  </script>
</html>
