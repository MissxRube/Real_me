<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;
use Auth;
use App\Models\Shipping;
use App\Models\Payment;

class CartController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', [
            'except'=>[
                'index','show'
            ]
        ]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products=\App\Models\Product::get();
        foreach ($products as $product) {
            $product['pic']=str_replace("[\"", "", $product['pic']);
            $product['pic']=str_replace("\"]", "", $product['pic']);
        }

        return view('front.produits', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        if ($request->quant) {
            $error = array();
            $success = '';
            foreach ($request->quant as $k=>$quant) {
                $id = $request->qty_id[$k];
                $cart = Cart::find($id);
                if ($quant > 0 && $cart) {
                    $cart->quantity = $quant;
                    $after_price=$cart->product->price;
                    $cart->amount = $after_price * $quant;
                    $cart->save();
                    $success = '已更新!';
                } else {
                    $error[] = '無效的動作!';
                }
            }
            return back()->with($error)->with('notice', $success);
        } else {
            return back()->with('notice', '沒有東西了...');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $cart = Cart::find($request->id);
        if ($cart) {
            $cart->delete();
            return back()->with('notice', '刪除成功');
        }
        return back()->with('notice', 'Error！！');
    }

    public function addToCart(Request $request, Product $product)
    {
        $product = Product::where('id', $request->id)->first();

        $already_cart = Cart::where('user_id', auth()->user()->id)->where('order_id', null)->where('product_id', $product->id)->first();
        if ($already_cart) {
            $already_cart->quantity = $already_cart->quantity + 1;
            $already_cart->amount = $product->price+ $already_cart->amount;
            $already_cart->save();
        } else {
            $cart = new Cart;
            $cart->user_id = auth()->user()->id;
            $cart->product_id = $product->id;
            $cart->price = $product->price;
            $cart->quantity = 1;
            $cart->amount=$cart->price*$cart->quantity;
            $cart->save();
        }
        return back()->with('notice', '購物車新增成功');
    }
    public function cartdetail()
    {
        $AllProducts=$this->getAllProductFromCart();
        $products = [];
        foreach ($AllProducts as $product) {
            $products[] = Product::find($product->product_id);
        }
        // $pics=[];
        // foreach ($products as $product) {
        //     $pics[]=$product->pic;
        // }
        // foreach ($pics as $pic) {
        //     $pics=str_replace("[\"", "", $pics);
        //     $pics=str_replace("\"]", "", $pics);
        // }
        // dd($pics);
        $totalPrice=$this->totalCartPrice();
        return view('front.cart', compact('AllProducts', 'totalPrice'));
    }

    public static function getAllProductFromCart($user_id='')
    {
        if (Auth::check()) {
            if ($user_id=="") {
                $user_id=auth()->user()->id;
            }
            return Cart::with('product')->where('user_id', $user_id)->where('order_id', null)->get();
        } else {
            return 0;
        }
    }
    public static function totalCartPrice($user_id='')
    {
        if (Auth::check()) {
            if ($user_id=="") {
                $user_id=auth()->user()->id;
            }
            return Cart::where('user_id', $user_id)->where('order_id', null)->sum('amount');
        } else {
            return 0;
        }
    }
    public function checkout(Request $request)
    {
        $totalPrice=$this->totalCartPrice();
        $shippings=Shipping::where('enabled', 1)->get();
        $payments=Payment::where('enabled', 1)->get();

        return view('front.checkout', compact('totalPrice', 'shippings', 'payments'));
    }
}
