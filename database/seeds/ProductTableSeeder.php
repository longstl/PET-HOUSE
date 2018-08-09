<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class ProductTableSeeder extends Seeder
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
        DB::table('products')->truncate();
        DB::table('products')->insert([
            [
                'title' => '',
                'description' => '',
                'images' => '',
                'categoryId' => '',
                'price' => 10000,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'title' => '',
                'description' => '',
                'images' => '',
                'categoryId' => '',
                'price' => 10000,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'title' => '',
                'description' => '',
                'images' => '',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'title' => '',
                'description' => '',
                'images' => '',
                'categoryId' => '',
                'price' => 10000,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'title' => '',
                'description' => '',
                'images' => '',
                'categoryId' => '',
                'price' => 10000,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'title' => '',
                'description' => '',
                'images' => '',
                'categoryId' => '',
                'price' => 10000,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'title' => '',
                'description' => '',
                'images' => '',
                'categoryId' => '',
                'price' => 10000,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'title' => '',
                'description' => '',
                'images' => '',
                'categoryId' => '',
                'price' => 10000,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'title' => '',
                'description' => '',
                'images' => '',
                'categoryId' => '',
                'price' => 10000,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'title' => '',
                'description' => '',
                'images' => '',
                'categoryId' => '',
                'price' => 10000,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'title' => '',
                'description' => '',
                'images' => '',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'title' => '',
                'description' => '',
                'images' => '',
                'categoryId' => '',
                'price' => 10000,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
