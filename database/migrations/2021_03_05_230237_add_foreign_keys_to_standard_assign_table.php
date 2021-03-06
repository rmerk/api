<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToStandardAssignTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('standard_assign', function (Blueprint $table) {
            $table->foreign('record_id', 'record_standard_fk')->references('record_id')->on('record')->onUpdate('RESTRICT')->onDelete('RESTRICT');
            $table->foreign('standard_assign_id', 'standard_id_fk')->references('standards_id')->on('standards')->onUpdate('RESTRICT')->onDelete('RESTRICT');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('standard_assign', function (Blueprint $table) {
            $table->dropForeign('record_standard_fk');
            $table->dropForeign('standard_id_fk');
        });
    }
}
