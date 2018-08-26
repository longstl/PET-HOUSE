<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
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
        DB::table('users')->truncate();
        DB::table('users')->insert([
            [
                'name' => 'guest',
                'email' => 'guest@guest.com',
                'password' => '',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'admin' => '0'
            ],
            [
                'name' => 'member',
                'email' => 'member@member.com',
                'password' => Hash::make("password"),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'admin' => '0'
            ],
            [
                'name' => 'admin',
                'email' => 'admin@admin.com',
                'password' => \Illuminate\Support\Facades\Hash::make("password"),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'admin' => '1'
            ],
        ]);
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
