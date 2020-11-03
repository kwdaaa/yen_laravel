<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('adds', function (Blueprint $table) {
            // 自動増分id
            $table->increments('id');

            // カップルid
            $table->integer('couple_id')->unsigned();
            $table->foreign('couple_id')
                ->references('id')->on('couples')
                ->onDelete('cascade');

            // 金額
            $table->integer('price');

            // 登録の日付
            $table->date('date');

            // カテゴリーid
            $table->integer('category_id')->unsigned();
            $table->foreign('category_id')
                ->references('id')->on('categories')
                ->onDelete('cascade');

            // 登録者
            $table->Boolean('person');

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
        Schema::dropIfExists('adds');
    }
}
