<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Payment;

class PaymentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Payment::truncate();
        Payment::create([
            'type'=>'ApplePay',
            'enabled'=>'1',
        ]);
        Payment::create([
            'type'=>'LinePay',
            'enabled'=>'1',
        ]);
        Payment::create([
            'type'=>'信用卡',
            'enabled'=>'1',
        ]);
        Payment::create([
            'type'=>'超商付款',
            'enabled'=>'1',
        ]);
        Payment::create([
            'type'=>'SamsungPay',
            'enabled'=>'1',
        ]);
    }
}
