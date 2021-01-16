<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class wishTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('wishes')->insert(['status' => 1, 'user_id' => 1]);
        DB::table('wishes')->insert(['status' => 2, 'user_id' => 1]);

        DB::table('wishes')->insert(['status' => 3, 'user_id' => 2]);
        DB::table('wishes')->insert(['status' => 4, 'user_id' => 2]);

        DB::table('wishes')->insert(['status' => 2, 'user_id' => 3]);
    }
}
