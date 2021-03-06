<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToRecordTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('record', function (Blueprint $table) {
            $table->foreign('record_type_id', 'record_record_type_fk')->references('record_type_id')->on('record_type')->onUpdate('RESTRICT')->onDelete('RESTRICT');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('record', function (Blueprint $table) {
            $table->dropForeign('record_record_type_fk');
        });
    }
}
