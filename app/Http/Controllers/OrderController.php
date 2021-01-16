<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Cart;
use Illuminate\Support\Str;
use App\Models\Shipping;
use Auth;
use App\Models\Payment;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $this->validate($request, [
            'name'=>'string|required',
            'address'=>'string|required',
            'phone'=>'numeric|required',
            'post_code'=>'string|nullable',
            'email'=>'string|required',
            'country'=>'string|required',
            'message'=>'string|nullable|max:250',
        ]);

        if (empty(Cart::where('user_id', auth()->user()->id)->where('order_id', null)->first())) {
            return back()->with('notice', 'Oops!!nothing here');
        }
        $order=new Order();
        $order_data=$request->all();
        $order_data['order_number']='ORD-'.strtoupper(Str::random(10));
        $order_data['user_id']=$request->user()->id;
        $order_data['shipping_id']=$request->shipping;
        $order_data['sub_total']=$this->totalCartPrice();
        $order_data['quantity']=$this->cartCount();

        if ($request->shipping) {
            $shipping=Shipping::where('id', $order_data['shipping_id'])->pluck('price');
            $order_data['total_amount']=$this->totalCartPrice()+$shipping[0];
        } else {
            $order_data['shipping_id']=$request->shipping;
            $order_data['total_amount']=$this->totalCartPrice();
        }

        $order_data['status']="new";
        $order_data['payment_id']=$request->payment;
        $payment=Payment::where('id', $order_data['payment_id']);

        $order->fill($order_data);
        $status=$order->save();

        Cart::where('user_id', auth()->user()->id)->where('order_id', null)->update(['order_id' => $order->id]);
        //新增訂單號碼至表格
        return redirect()->route('test')->with('notice', '訂購成功');
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
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public static function cartCount($user_id='')
    {
        if (Auth::check()) {
            if ($user_id=="") {
                $user_id=auth()->user()->id;
            }
            return Cart::where('user_id', $user_id)->where('order_id', null)->sum('quantity');
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
}
