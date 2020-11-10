<?php

use Illuminate\Database\Seeder;

class TotalTableInitSeeder extends Seeder
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
                'person1_food_total'    =>  0,
                'person1_daily_total'   =>  0,
                'person1_leisure_total' =>  0,
                'person1_housing_total' =>  0,
                'person1_other_total'   =>  0,
                'person1_total'         =>  0,
                'person2_food_total'    =>  0,
                'person2_daily_total'   =>  0,
                'person2_leisure_total' =>  0,
                'person2_housing_total' =>  0,
                'person2_other_total'   =>  0,
                'person2_total'         =>  0,
                'both_food_total'       =>  0,
                'both_daily_total'      =>  0,
                'both_leisure_total'    =>  0,
                'both_housing_total'    =>  0,
                'both_other_total'      =>  0,
                'both_total'            =>  0,
            ],
        ];
        # DB::table->insertでレコードの登録
        DB::table('totals')->insert($param);
    }
}
