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
        DB::table('respondents')->insert(
            [
                'name' => 'やまだ  たろう',
                'age' => 20,
                'sex' => 1,
                'kind' => 1,
                'other' => '特に無し',
                'created_at' => date('Y-m-d H:i:s'),
            ]
        );
        DB::table('respondents')->insert(
            [
                'name' => 'すずき  じろう',
                'age' => 30,
                'sex' => 1,
                'kind' => 2,
                'other' => '角部屋希望',
                'created_at' => date('Y-m-d H:i:s'),
            ]
        );
        DB::table('respondents')->insert(
            [
                'name' => 'たなか  はなこ',
                'age' => 40,
                'sex' => 2,
                'kind' => 3,
                'other' => '最上階希望',
                'created_at' => date('Y-m-d H:i:s'),
            ]
        );
    }
}
