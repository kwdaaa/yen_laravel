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
            $table->increments('add_id');

            // カップルid
            $table->foreign('couple_id')                    // couple_idに外部キーを設定する
                ->references('couple_id')->on('couples')    // cauplesテーブルのcouple_idカラムを外部キーにする
                ->onDelete('restrict');                     // 参照先の削除を禁止する

            // 金額
            $table->integer('price');

            // 登録の日付
            $table->date('date');

            // カテゴリーid
            $table->foreign('category_id')                  // category_idに外部キーを設定する
            ->references('category_id')->on('categories')   // categoriesテーブルのidカラムを外部キーにする
            ->onDelete('restrict');                         // 参照先の削除を禁止する

            // 登録者
            $table->foreign('person');

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
