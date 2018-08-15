<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArticleTableSeeder extends Seeder
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
        DB::table('articles')->truncate();
        DB::table('articles')->insert([
            [
                'title' => '',
                'content' => '',
                'images' => '',
                'userId' => '',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'title' => '',
                'content' => '',
                'images' => '',
                'userId' => '',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'title' => '',
                'content' => '',
                'images' => '',
                'userId' => '',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'title' => '',
                'content' => '',
                'images' => '',
                'userId' => '',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'title' => '',
                'content' => '',
                'images' => '',
                'userId' => '',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'title' => '',
                'content' => '',
                'images' => '',
                'userId' => '',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'title' => '',
                'content' => '',
                'images' => '',
                'userId' => '',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]
        ]);
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
