<?php

namespace Database\Seeders;

use App\Models\Order;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrderSeeder extends Seeder
{
    public function run()
    {
        Order::create([
            'account_id' => '1',
            'ebook_id' => 2,
            'order_date' => Carbon::now(),
        ]);

        Order::create([
            'account_id' => '1',
            'ebook_id' => 3,
            'order_date' => Carbon::now(),
        ]);

        Order::create([
            'account_id' => '2',
            'ebook_id' => 1,
            'order_date' => Carbon::now(),
        ]);

        Order::create([
            'account_id' => '2',
            'ebook_id' => 5,
            'order_date' => Carbon::now(),
        ]);
    }
}
