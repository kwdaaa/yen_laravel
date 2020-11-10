<?php

use Illuminate\Database\Seeder;

class AddTableInitSeeder extends Seeder
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
                'price' => 0,
                'date' => '2020/10/1',
                'category_id' => 1,
                'person' => true
            ],
            [
                'couple_id' => 1,
                'price' => 0,
                'date' => '2020/10/3',
                'category_id' => 2,
                'person' => true
            ],
            [
                'couple_id' => 1,
                'price' => 0,
                'date' => '2020/10/5',
                'category_id' => 3,
                'person' => true
            ],
            [
                'couple_id' => 1,
                'price' => 0,
                'date' => '2020/10/8',
                'category_id' => 4,
                'person' => true
            ],
            [
                'couple_id' => 1,
                'price' => 0,
                'date' => '2020/10/10',
                'category_id' => 5,
                'person' => true
            ],



            [
                'couple_id' => 1,
                'price' => 0,
                'date' => '2020/10/1',
                'category_id' => 1,
                'person' => false
            ],
            [
                'couple_id' => 1,
                'price' => 0,
                'date' => '2020/10/3',
                'category_id' => 2,
                'person' => false
            ],
            [
                'couple_id' => 1,
                'price' => 0,
                'date' => '2020/10/5',
                'category_id' => 3,
                'person' => false
            ],
            [
                'couple_id' => 1,
                'price' => 0,
                'date' => '2020/10/8',
                'category_id' => 4,
                'person' => false
            ],
            [
                'couple_id' => 1,
                'price' => 0,
                'date' => '2020/10/10',
                'category_id' => 5,
                'person' => false
            ],

        ];
        # DB::table->insertでレコードの登録
        DB::table('adds')->insert($param);
    }
}
