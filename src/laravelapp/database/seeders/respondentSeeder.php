<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class respondentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('respondents')->insert([
            'name' => 'やまだ  たろう',
            'age' => 20,
            'sex' => 1,
            'kind' => 1,
            'other' => '特に無し'
        ]);
    }
}
