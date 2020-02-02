<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('media_types', function (Blueprint $table) {
          $table->bigIncrements('id');
          $table->string('name');
          $table->timestamps();
      });
      Schema::create('blog_types', function (Blueprint $table) {
          $table->bigIncrements('id');
          $table->string('name');
          $table->timestamps();
      });
        Schema::create('blogs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->text('body');
            $table->integer('blog_type_id')->unsigned();
            $table->foreign('blog_type_id')->references('id')->on('blog_types');
            $table->timestamps();
        });
        Schema::create('blog_medias', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('media_type_id')->unsigned();
            $table->foreign('media_type_id')->references('id')->on('media_types');
            $table->string('media_file');
            $table->integer('blog_id')->unsigned();
            $table->foreign('blog_id')->references('id')->on('blogs')->onDelete('cascade');
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
        Schema::dropIfExists('blogs');
    }
}
