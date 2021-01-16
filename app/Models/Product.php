<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Voyager;

class Product extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'pic', 'price', 'desc', 'enabled', 'sell_at', 'cgy_id', 'options'];
    public function Cgy()
    {
        return $this->belongTo(\App\Models\Cgy::class);
    }
    public function carts()
    {
        return $this->hasMany(\App\Models\Cart::class)->whereNotNull('order_id');
    }

    public function getFirstPicUrl()
    {
        $pic = json_decode($this->pic, true);
        return Voyager::image($pic[0]);
    }
}
