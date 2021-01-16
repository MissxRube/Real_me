<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cgy;
use Auth;
use App\Models\Product;
use App\Models\Cart;

class HomeController extends Controller
{
    public function getproduct()
    {
        $products=Product::get();
        foreach ($products as $product) {
            $product['pic']=str_replace("[\"", "", $product['pic']);
            $product['pic']=str_replace("\"]", "", $product['pic']);
        }
        return $products;
    }

    public function index()
    {
        return view('welcome');
    }

    public function gethome()
    {
        $products=$this->getproduct()->where('cgy_id', 1);
        $k=Cgy::where('id', 1)->get();
        return view('front.content', compact('products', 'k'));
    }

    public function gethome1()
    {
        $products=$this->getproduct()->where('cgy_id', 2);
        $k=Cgy::where('id', 2)->get();
        return view('front.content1', compact('products', 'k'));
    }

    public function gethome2()
    {
        $products=$this->getproduct()->where('cgy_id', 3);
        $k=Cgy::where('id', 3)->get();
        return view('front.content2', compact('products', 'k'));
    }
    public function gethome3()
    {
        $products=$this->getproduct()->where('cgy_id', 4);
        $k=Cgy::where('id', 4)->get();
        return view('front.content3', compact('products', 'k'));
    }

    public function detail($id)
    {
        $products=$this->getproduct()->where('id', $id)->first();
        return view('front.productdetails', compact('products'));
    }
    public function produits()
    {
        return view('front.produits');
    }


    public function mylogout()
    {
        $products=$this->getproduct()->where('cgy_id', 1);
        $k=Cgy::where('id', 1)->get();
        Auth::logout();
        return view('front.content', compact('products', 'k'));
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
}
