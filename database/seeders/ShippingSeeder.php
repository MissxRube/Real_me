<?php

namespace Database\Seeders;

use App\Models\Shipping;
use Illuminate\Database\Seeder;

class ShippingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Shipping::truncate();
        Shipping::create([
            'type'=>'貨運到府',
            'price'=>'300',
            'enabled'=>'1',
        ]);
        Shipping::create([
            'type'=>'超商取貨',
            'price'=>'65',
            'enabled'=>'1',
        ]);
    }
}
