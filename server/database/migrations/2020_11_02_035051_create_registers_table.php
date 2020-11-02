<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegistersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registers', function (Blueprint $table) {
            // 自動増分id
            $table->increments('id');

            // カップルid（10バイト以内）
            $table->char('couple_id', 10);

            // 金額
            $table->integer('price');

            // 登録の日付
            $table->date('date');

            // カテゴリーid
            $table->foreign('category_id')              // category_idに外部キーを設定する
                ->references('id')->on('categories')    // categoriesテーブルのidカラムを外部キーにする
                ->onDelete('restrict');                 // 参照先の削除を禁止する

            // 登録者
            $table->foreign('person_name')                                   // personに外部キーを設定する
                ->references('person1_name', 'person2_name')->on('users')    // usersテーブルのperson1カラムとperson2カラムとを外部キーにする
                ->onDelete('restrict');                                      // 参照先の削除を禁止する


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
        Schema::dropIfExists('registers');
    }
}
