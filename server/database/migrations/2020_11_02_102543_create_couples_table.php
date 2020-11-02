<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCouplesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('couples', function (Blueprint $table) {
            // 自動増分id
            $table->increments('couple_id');

            // カップルid（10バイト以内）
            $table->char('couple_name', 10);

            // person1の名前（日本語６文字以内）
            $table->char('person1_name', 18);

            // person2の名前（日本語６文字以内）
            $table->char('person2_name', 18);

            // カップルpassword
            $table->string('password');

            // トークン(パスワードリセット用)
            $table->rememberToken();

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
        Schema::dropIfExists('couples');
    }
}
