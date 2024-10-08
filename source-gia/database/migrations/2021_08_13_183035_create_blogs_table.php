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
        Schema::create('blogs', function (Blueprint $table) {
            $table->id();
            $table->text('image')->nullable();
            $table->text('title')->nullable();
            $table->text('short_description')->nullable();
            $table->longText('full_description')->nullable();
            $table->text('slug')->nullable();
            $table->text('youtube_embed')->nullable();

            $table->text('meta_title')->nullable();
            $table->text('meta_keyword')->nullable();
            $table->longText('meta_description')->nullable();
            $table->integer('status')->default(0);

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
