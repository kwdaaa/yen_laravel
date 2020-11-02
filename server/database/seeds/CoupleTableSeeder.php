<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CoupleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('couples')->insert([
            'couple_name' => 'kawa_shibu',
            'person1_name' => 'かわだ',
            'person2_name' => 'しぶや',
            'password' => 'sparta2020',
        ]);
    }
}
