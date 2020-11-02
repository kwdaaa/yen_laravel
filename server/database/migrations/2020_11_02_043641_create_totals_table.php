<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTotalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('totals', function (Blueprint $table) {
            // 自動増分id
            $table->increments('id');

            ////////// person1 //////////
            // person1の食費合計
            $table->integer('person1_food_total');
            
            // person1の日用品費合計
            $table->integer('person1_daily_total');

            // person1の娯楽費合計
            $table->integer('person1_food_total');
            
            // person1の固定費合計
            $table->integer('person1_food_total');

            // person1のその他合計
            $table->integer('person1_food_total');




            // タイムスタンプ
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('totals');
    }
}
