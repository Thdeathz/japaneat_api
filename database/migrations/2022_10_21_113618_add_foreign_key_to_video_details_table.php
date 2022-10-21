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
        Schema::table('video_details', function (Blueprint $table) {
            if (Schema::hasColumn('video_details', 'category_id')) {
                $table->foreign('category_id')
                    ->references('id')->on('categories');
            }
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('video_details', function (Blueprint $table) {
            if (Schema::hasColumn('video_details', 'category_id')) {
                $table->dropForeign(['category_id']);
            }
        });
    }
};
