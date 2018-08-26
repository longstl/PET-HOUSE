<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class OrderTableSeeder extends Seeder
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
        DB::table('orders')->truncate();
        DB::table('orders')->insert([
            [
                'userId' => 1,
                'total_price' => 1000,
                'shipName' => 'Đào Khánh',
                'shipAddress' => 'Tôn Thất Thuyết',
                'shipPhone' => '12421456',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'userId' => 1,
                'total_price' => 2000,
                'shipName' => 'Đào Khánh',
                'shipAddress' => 'Tôn Thất Thuyết',
                'shipPhone' => '12421456',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'userId' => 1,
                'total_price' => 5000,
                'shipName' => 'Đào Khánh',
                'shipAddress' => 'Tôn Thất Thuyết',
                'shipPhone' => '12421456',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'userId' => 1,
                'total_price' => 3000,
                'shipName' => 'Đào Khánh',
                'shipAddress' => 'Tôn Thất Thuyết',
                'shipPhone' => '12421456',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'userId' => 1,
                'total_price' => 7000,
                'shipName' => 'Đào Khánh',
                'shipAddress' => 'Tôn Thất Thuyết',
                'shipPhone' => '12421456',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'userId' => 1,
                'total_price' => 19000,
                'shipName' => 'Trần Khánh',
                'shipAddress' => 'Tôn Thất Thuyết',
                'shipPhone' => '2512421',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'userId' => 1,
                'total_price' => 21000,
                'shipName' => 'Trần Khánh',
                'shipAddress' => 'Tôn Thất Thuyết',
                'shipPhone' => '2512421',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'userId' => 1,
                'total_price' => 21000,
                'shipName' => 'Trần Khánh',
                'shipAddress' => 'Tôn Thất Thuyết',
                'shipPhone' => '2512421',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'userId' => 1,
                'total_price' => 13000,
                'shipName' => 'Trần Khánh',
                'shipAddress' => 'Tôn Thất Thuyết',
                'shipPhone' => '2512421',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'userId' => 1,
                'total_price' => 15000,
                'shipName' => 'Trần Khánh',
                'shipAddress' => 'Tôn Thất Thuyết',
                'shipPhone' => '2512421',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'userId' => 1,
                'total_price' => 12000,
                'shipName' => 'Trần Khánh',
                'shipAddress' => 'Tôn Thất Thuyết',
                'shipPhone' => '2512421',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'userId' => 1,
                'total_price' => 13000,
                'shipName' => 'Thườngh',
                'shipAddress' => 'Tôn Thất Thuyết',
                'shipPhone' => '1521456',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'userId' => 1,
                'total_price' => 14000,
                'shipName' => 'Thườngh',
                'shipAddress' => 'Tôn Thất Thuyết',
                'shipPhone' => '1521456',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'userId' => 1,
                'total_price' => 11000,
                'shipName' => 'Thườngh',
                'shipAddress' => 'Tôn Thất Thuyết',
                'shipPhone' => '1521456',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'userId' => 1,
                'total_price' => 16000,
                'shipName' => 'Thườngh',
                'shipAddress' => 'Tôn Thất Thuyết',
                'shipPhone' => '1521456',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'userId' => 1,
                'total_price' => 17000,
                'shipName' => 'Thườngh',
                'shipAddress' => 'Tôn Thất Thuyết',
                'shipPhone' => '1521456',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'userId' => 1,
                'total_price' => 17000,
                'shipName' => 'Trịnh Thảo',
                'shipAddress' => 'Tôn Thất Thuyết',
                'shipPhone' => '1242456',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'userId' => 1,
                'total_price' => 11000,
                'shipName' => 'Trịnh Thảo',
                'shipAddress' => 'Tôn Thất Thuyết',
                'shipPhone' => '1242456',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'userId' => 1,
                'total_price' => 11000,
                'shipName' => 'Trịnh Thảoh',
                'shipAddress' => 'Tôn Thất Thuyết',
                'shipPhone' => '1242456',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'userId' => 1,
                'total_price' => 19000,
                'shipName' => 'Trịnh Thảo',
                'shipAddress' => 'Tôn Thất Thuyết',
                'shipPhone' => '1242456',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]
        ]);
        DB::statement('SET FOREIGN_KEY_CHECKS=1');
    }
}
