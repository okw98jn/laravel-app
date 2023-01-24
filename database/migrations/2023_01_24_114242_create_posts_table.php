<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->comment('ユーザーID');
            $table->foreignId('category_id')->comment('カテゴリーID');
            $table->string('title')->comment('タイトル');
            $table->string('image')->comment('料理の写真');
            $table->text('description')->nullable()->comment('レシピの説明');
            $table->string('time')->comment('所要時間');
            $table->string('number_of_persons')->comment('何人前か');
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
        Schema::dropIfExists('posts');
    }
}
