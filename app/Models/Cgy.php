<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cgy extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'pic', 'desc', 'enabled','sort'];
    public function product()
    {
        return $this->hasMany(\App\Models\Product::class);
    }
}
