<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('video_details', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('video_id')->unsigned();
            $table->unsignedInteger('level');
            $table->bigInteger('teacher_id')->unsigned();
            $table->bigInteger('category_id')->unsigned();
            $table->string('title');
            $table->longtext('description');
            $table->timestamps();

            $table->foreign('video_id')
                ->references('id')->on('videos');
            $table->foreign('teacher_id')
                ->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('video_details');
    }
};
