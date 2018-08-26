<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrderDetailTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        DB::table('order_details')->truncate();
        DB::table('order_details')->insert([
            [
                'orderId' => 1,
                'productId' => 2,
                'quantity' => 1,
                'unit_price' => 1000,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'orderId' => 1,
                'productId' => 23,
                'quantity' => 1,
                'unit_price' => 1000,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'orderId' => 1,
                'productId' => 4,
                'quantity' => 1,
                'unit_price' => 1000,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'orderId' => 2,
                'productId' => 23,
                'quantity' => 11,
                'unit_price' => 1000,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'orderId' => 2,
                'productId' => 24,
                'quantity' => 1,
                'unit_price' => 1000,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'orderId' => 2,
                'productId' => 22,
                'quantity' => 1,
                'unit_price' => 1000,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'orderId' => 3,
                'productId' => 3,
                'quantity' => 1,
                'unit_price' => 1000,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'orderId' => 3,
                'productId' => 2,
                'quantity' => 1,
                'unit_price' => 1000,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'orderId' => 4,
                'productId' => 2,
                'quantity' => 1,
                'unit_price' => 1000,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'orderId' => 4,
                'productId' => 4,
                'quantity' => 1,
                'unit_price' => 1000,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'orderId' => 5,
                'productId' => 5,
                'quantity' => 1,
                'unit_price' => 1000,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'orderId' => 5,
                'productId' => 7,
                'quantity' => 1,
                'unit_price' => 1000,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'orderId' => 6,
                'productId' => 7,
                'quantity' => 1,
                'unit_price' => 1000,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'orderId' => 7,
                'productId' => 2,
                'quantity' => 1,
                'unit_price' => 1000,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'orderId' => 7,
                'productId' => 5,
                'quantity' => 1,
                'unit_price' => 1000,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'orderId' => 7,
                'productId' => 9,
                'quantity' => 1,
                'unit_price' => 1000,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'orderId' => 8,
                'productId' => 2,
                'quantity' => 1,
                'unit_price' => 1000,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'orderId' => 8,
                'productId' => 3,
                'quantity' => 1,
                'unit_price' => 1000,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'orderId' => 9,
                'productId' => 2,
                'quantity' => 1,
                'unit_price' => 1000,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'orderId' => 9,
                'productId' => 12,
                'quantity' => 1,
                'unit_price' => 1000,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'orderId' => 10,
                'productId' => 10,
                'quantity' => 1,
                'unit_price' => 1000,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'orderId' => 10,
                'productId' => 11,
                'quantity' => 1,
                'unit_price' => 1000,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'orderId' => 11,
                'productId' => 10,
                'quantity' => 1,
                'unit_price' => 1000,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'orderId' => 11,
                'productId' => 21,
                'quantity' => 1,
                'unit_price' => 1000,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'orderId' => 12,
                'productId' => 10,
                'quantity' => 1,
                'unit_price' => 1000,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'orderId' => 13,
                'productId' => 14,
                'quantity' => 1,
                'unit_price' => 1000,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'orderId' => 14,
                'productId' => 21,
                'quantity' => 1,
                'unit_price' => 1000,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'orderId' => 14,
                'productId' => 22,
                'quantity' => 1,
                'unit_price' => 1000,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'orderId' => 15,
                'productId' => 15,
                'quantity' => 1,
                'unit_price' => 1000,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'orderId' => 15,
                'productId' => 28,
                'quantity' => 1,
                'unit_price' => 1000,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'orderId' => 16,
                'productId' => 16,
                'quantity' => 1,
                'unit_price' => 1000,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'orderId' => 16,
                'productId' => 2,
                'quantity' => 1,
                'unit_price' => 1000,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'orderId' => 17,
                'productId' => 2,
                'quantity' => 1,
                'unit_price' => 1000,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'orderId' => 17,
                'productId' => 9,
                'quantity' => 1,
                'unit_price' => 1000,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'orderId' => 18,
                'productId' => 2,
                'quantity' => 1,
                'unit_price' => 1000,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'orderId' => 18,
                'productId' => 20,
                'quantity' => 1,
                'unit_price' => 1000,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'orderId' => 18,
                'productId' => 25,
                'quantity' => 1,
                'unit_price' => 1000,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'orderId' => 19,
                'productId' => 2,
                'quantity' => 1,
                'unit_price' => 1000,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'orderId' => 19,
                'productId' => 21,
                'quantity' => 1,
                'unit_price' => 1000,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'orderId' => 19,
                'productId' => 25,
                'quantity' => 1,
                'unit_price' => 1000,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'orderId' => 20,
                'productId' => 2,
                'quantity' => 1,
                'unit_price' => 1000,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'orderId' => 20,
                'productId' => 21,
                'quantity' => 1,
                'unit_price' => 1000,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'orderId' => 20,
                'productId' => 25,
                'quantity' => 1,
                'unit_price' => 1000,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'orderId' => 20,
                'productId' => 19,
                'quantity' => 1,
                'unit_price' => 1000,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'orderId' => 20,
                'productId' => 29,
                'quantity' => 1,
                'unit_price' => 1000,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'orderId' => 20,
                'productId' => 41,
                'quantity' => 1,
                'unit_price' => 1000,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'orderId' => 20,
                'productId' => 44,
                'quantity' => 1,
                'unit_price' => 1000,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'orderId' => 20,
                'productId' => 39,
                'quantity' => 1,
                'unit_price' => 1000,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]
        ]);
        DB::statement('SET FOREIGN_KEY_CHECKS=1');
    }
}