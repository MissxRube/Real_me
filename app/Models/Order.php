<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable=['user_id','order_number','sub_total','quantity','total_amount','name','country','post_code','address','phone','email','payment_id','shipping_id'];

    public function cart()
    {
        return $this->hasMany(App\Models\Cart::class);
    }
    public function shipping()
    {
        return $this->belongsTo(App\Models\Shipping::class, 'shipping_id');
    }
    public function payment()
    {
        return $this->belongsTo(App\Models\Payment::class, 'payment_id');
    }
    public function user()
    {
        return $this->belongsTo('App\Models\User', 'user_id');
    }
}
