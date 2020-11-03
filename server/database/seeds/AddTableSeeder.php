<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AddTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        # paramに配列を代入
        $param = [
            [
                'couple_id' => 1,
                'price' => 1000,
                'date' => '2020/10/1',
                'category_id' => 1,
                'person' => true
            ],
            [
                'couple_id' => 1,
                'price' => 2000,
                'date' => '2020/10/3',
                'category_id' => 2,
                'person' => true
            ],
            [
                'couple_id' => 1,
                'price' => 3000,
                'date' => '2020/10/5',
                'category_id' => 3,
                'person' => true
            ],
            [
                'couple_id' => 1,
                'price' => 4000,
                'date' => '2020/10/8',
                'category_id' => 4,
                'person' => true
            ],
            [
                'couple_id' => 1,
                'price' => 5000,
                'date' => '2020/10/10',
                'category_id' => 5,
                'person' => true
            ],



            [
                'couple_id' => 1,
                'price' => 100,
                'date' => '2020/10/1',
                'category_id' => 1,
                'person' => true
            ],
            [
                'couple_id' => 1,
                'price' => 200,
                'date' => '2020/10/3',
                'category_id' => 2,
                'person' => true
            ],
            [
                'couple_id' => 1,
                'price' => 300,
                'date' => '2020/10/5',
                'category_id' => 3,
                'person' => true
            ],
            [
                'couple_id' => 1,
                'price' => 400,
                'date' => '2020/10/8',
                'category_id' => 4,
                'person' => true
            ],
            [
                'couple_id' => 1,
                'price' => 500,
                'date' => '2020/10/10',
                'category_id' => 5,
                'person' => true
            ],          
            
            




            [
                'couple_id' => 1,
                'price' => 1000,
                'date' => '2020/10/1',
                'category_id' => 1,
                'person' => false
            ],
            [
                'couple_id' => 1,
                'price' => 2000,
                'date' => '2020/10/3',
                'category_id' => 2,
                'person' => false
            ],
            [
                'couple_id' => 1,
                'price' => 3000,
                'date' => '2020/10/5',
                'category_id' => 3,
                'person' => false
            ],
            [
                'couple_id' => 1,
                'price' => 4000,
                'date' => '2020/10/8',
                'category_id' => 4,
                'person' => false
            ],
            [
                'couple_id' => 1,
                'price' => 5000,
                'date' => '2020/10/10',
                'category_id' => 5,
                'person' => false
            ],



            [
                'couple_id' => 1,
                'price' => 100,
                'date' => '2020/10/1',
                'category_id' => 1,
                'person' => false
            ],
            [
                'couple_id' => 1,
                'price' => 200,
                'date' => '2020/10/3',
                'category_id' => 2,
                'person' => false
            ],
            [
                'couple_id' => 1,
                'price' => 300,
                'date' => '2020/10/5',
                'category_id' => 3,
                'person' => false
            ],
            [
                'couple_id' => 1,
                'price' => 400,
                'date' => '2020/10/8',
                'category_id' => 4,
                'person' => false
            ],
            [
                'couple_id' => 1,
                'price' => 500,
                'date' => '2020/10/10',
                'category_id' => 5,
                'person' => false
            ],            
        ];
        # DB::table->insertでレコードの登録
        DB::table('adds')->insert($param);
    }
}
