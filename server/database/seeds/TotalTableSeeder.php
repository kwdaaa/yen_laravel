<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TotalTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            [
                'couple_id' => 1,
                'person1_food_total'    =>  1100,
                'person1_daily_total'   =>  2200,
                'person1_leisure_total' =>  3300,
                'person1_housing_total' =>  4400,
                'person1_other_total'   =>  5500,
                'person1_total'         =>  16500,
                'person2_food_total'    =>  1100,
                'person2_daily_total'   =>  2200,
                'person2_leisure_total' =>  3300,
                'person2_housing_total' =>  4400,
                'person2_other_total'   =>  5500,
                'person2_total'         =>  16500,
                'both_food_total'       =>  2200,
                'both_daily_total'      =>  4400,
                'both_leisure_total'    =>  6600,
                'both_housing_total'    =>  8800,
                'both_other_total'      =>  11000,
                'both_total'            =>  33000,
            ],
        ];
        # DB::table->insertでレコードの登録
        DB::table('totals')->insert($param);
    }
}
