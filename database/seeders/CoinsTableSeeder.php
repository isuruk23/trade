<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CoinsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $now = Carbon::now();

        DB::table('coins')->insert([
            [
                'symbol'       => 'USDT',
                'name'         => 'USDT Coin',
                'price'        => 1000,        // initial price
                'total_supply' => 1000000000,  // 1 billion
                'created_at'   => $now,
                'updated_at'   => $now,
            ],
            [
                'symbol'       => 'ETX',
                'name'         => 'ETX Coin',
                'price'        => 1000,        // initial price
                'total_supply' => 1000000000,  // 1 billion
                'created_at'   => $now,
                'updated_at'   => $now,
            ],
            [
                'symbol'       => 'BTC',
                'name'         => 'Bitcoin',
                'price'        => 60000,
                'total_supply' => 21000000,
                'created_at'   => $now,
                'updated_at'   => $now,
            ],
            [
                'symbol'       => 'ETH',
                'name'         => 'Ethereum',
                'price'        => 4000,
                'total_supply' => 115000000,
                'created_at'   => $now,
                'updated_at'   => $now,
            ],
        ]);
    }
}
