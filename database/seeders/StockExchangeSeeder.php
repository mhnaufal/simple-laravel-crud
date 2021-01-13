<?php

namespace Database\Seeders;

use App\Models\StockExchange;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class StockExchangeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // StockExchange::table('securities')->insert([
        //     'name' => Str::random(5),
        //     'buy' => random_int(100000,1000000),
        //     'sell' => random_int(50000, 1000000),
        //     'lot' => random_int(1,100)
        // ]);
        StockExchange::factory(6)->create();
    }
}
