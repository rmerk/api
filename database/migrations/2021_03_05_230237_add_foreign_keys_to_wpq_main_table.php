<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToWpqMainTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('wpq_main', function (Blueprint $table) {
            $table->foreign('record_id', 'wpq_main_record_fk')->references('record_id')->on('record')->onUpdate('RESTRICT')->onDelete('RESTRICT');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('wpq_main', function (Blueprint $table) {
            $table->dropForeign('wpq_main_record_fk');
        });
    }
}
