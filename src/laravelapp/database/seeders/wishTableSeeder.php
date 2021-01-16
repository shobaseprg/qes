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
        DB::table('wishes')->insert(['status' => 1, 'respondent_id' => 1]);
        DB::table('wishes')->insert(['status' => 2, 'respondent_id' => 1]);

        DB::table('wishes')->insert(['status' => 3, 'respondent_id' => 2]);
        DB::table('wishes')->insert(['status' => 4, 'respondent_id' => 2]);

        DB::table('wishes')->insert(['status' => 2, 'respondent_id' => 3]);
    }
}
