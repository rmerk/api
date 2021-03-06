<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToWpsMainTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('wps_main', function (Blueprint $table) {
            $table->foreign('record_id', 'wps_main_record_fk')->references('record_id')->on('record')->onUpdate('RESTRICT')->onDelete('RESTRICT');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('wps_main', function (Blueprint $table) {
            $table->dropForeign('wps_main_record_fk');
        });
    }
}
