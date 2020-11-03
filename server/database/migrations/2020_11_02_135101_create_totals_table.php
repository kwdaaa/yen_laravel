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
            // カップルid
            $table->integer('couple_id')->unsigned();
            $table->foreign('couple_id')
                ->references('id')->on('couples')
                // 参照先のデータが消されたら一緒に消す。
                ->onDelete('cascade');

            ////////// person1 //////////
            // person1の食費合計
            $table->integer('person1_food_total');

            // person1の日用品費合計
            $table->integer('person1_daily_total');

            // person1の娯楽費合計
            $table->integer('person1_leisure_total');

            // person1の固定費合計
            $table->integer('person1_housing_total');

            // person1のその他合計
            $table->integer('person1_others_total');

            // person1の全合計
            $table->integer('person1_total');




            ////////// person2 //////////
            // person2の食費合計
            $table->integer('person2_food_total');

            // person2の日用品費合計
            $table->integer('person2_daily_total');

            // person2の娯楽費合計
            $table->integer('person2_leisure_total');

            // person2の固定費合計
            $table->integer('person2_housing_total');

            // person2のその他合計
            $table->integer('person2_others_total');

            // person2の全合計
            $table->integer('person2_total');




            ////////// ２人 //////////
            // ２人の食費合計
            $table->integer('both_food_total');

            // ２人の日用品費合計
            $table->integer('both_daily_total');

            // ２人の娯楽費合計
            $table->integer('both_leisure_total');

            // ２人の固定費合計
            $table->integer('both_housing_total');

            // ２人のその他合計
            $table->integer('both_others_total');

            // ２人の全合計
            $table->integer('both_total');




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
