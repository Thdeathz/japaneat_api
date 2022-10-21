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
        Schema::create('record_details', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('video_id')->unsigned();
            $table->bigInteger('offer_id')->unsigned();
            $table->bigInteger('answer_id')->unsigned();
            $table->timestamps();

            $table->foreign('video_id')
                ->references('id')->on('videos');
            $table->foreign('offer_id')
                ->references('id')->on('users');
            $table->foreign('answer_id')
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
        Schema::dropIfExists('record_details');
    }
};
