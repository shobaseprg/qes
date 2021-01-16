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
                'age' => 2,
                'sex' => 1,
                'other' => '特に無し',
                'created_at' => date('Y-m-d H:i:s'),
            ]
        );
        DB::table('respondents')->insert(
            [
                'name' => 'すずき  じろう',
                'age' => 3,
                'sex' => 1,
                'other' => '角部屋希望',
                'created_at' => date('Y-m-d H:i:s'),
            ]
        );
        DB::table('respondents')->insert(
            [
                'name' => 'たなか  はなこ',
                'age' => 4,
                'sex' => 2,
                'other' => '最上階希望',
                'created_at' => date('Y-m-d H:i:s'),
            ]
        );
    }
}
