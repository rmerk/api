<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToPqrMainTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('pqr_main', function (Blueprint $table) {
            $table->foreign('record_id', 'pqr_main_record_fk')->references('record_id')->on('UserData.record')->onUpdate('RESTRICT')->onDelete('RESTRICT');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('pqr_main', function (Blueprint $table) {
            $table->dropForeign('pqr_main_record_fk');
        });
    }
}
