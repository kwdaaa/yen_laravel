<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoryTableSeeder extends Seeder
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
                'category_name' => '食費',
            ],
            [
                'category_name' => '日用品費',
            ],
            [
                'category_name' => '娯楽費',
            ],
            [
                'category_name' => '固定費',
            ],
            [
                'category_name' => 'その他',
            ]
        ];
        # DB::table->insertでレコードの登録
        DB::table('categories')->insert($param);
    }
}
