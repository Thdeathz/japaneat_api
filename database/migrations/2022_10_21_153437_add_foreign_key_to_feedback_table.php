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
        Schema::table('feedback', function (Blueprint $table) {
            if (Schema::hasColumn('feedback', 'record_detail_id')) {
                $table->foreign('record_detail_id')
                    ->references('id')->on('record_details');
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
        Schema::table('feedback', function (Blueprint $table) {
            if (Schema::hasColumn('video_details', 'category_id')) {
                $table->dropForeign(['record_detail_id']);
            }
        });
    }
};
