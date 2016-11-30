<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->increments('id');
            //postに対してコメントを紐づける
            $table->integer('post_id')->unsigned();
            $table->string('body');
            $table->timestamps();
            //紐づけ処理
            $table->foreign('post_id')
                  ->references('id')
                  ->on('posts')
                  //postの削除時に紐づいたコメントを削除
                  ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comments');
    }
}
