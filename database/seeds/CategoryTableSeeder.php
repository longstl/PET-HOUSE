<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('categories')->truncate();
        DB::table('categories')->insert([
            [
                'title' => 'Dogs',
                'description' => 'Dog types',
                'images' => 'https://i2.wp.com/www.pmarinc.org/wp-content/uploads/2017/06/which-type-of-dog-barks-the-least.jpg?fit=593%2C305&ssl=1',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'title' => 'Cats',
                'description' => 'Cat types',
                'images' => 'https://i.dailymail.co.uk/i/pix/2017/01/30/15/3CAAC71200000578-4171544-image-a-8_1485788971849.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'title' => 'Accessories',
                'description' => 'accessoies pet',
                'images' => 'https://ae01.alicdn.com/kf/HTB1AD2yIpXXXXcIXFXXq6xXFXXXa/223076411/HTB1AD2yIpXXXXcIXFXXq6xXFXXXa.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'title' => 'Foodpet',
                'description' => 'Food pet',
                'images' => 'https://www.petmart.vn/wp-content/uploads/2017/09/thuc-an-cho-meo-vi-ca-hoi-khoai-tay-anf-salmon-potato-595x595.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]

        ]);
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
