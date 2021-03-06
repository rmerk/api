<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToWeldProcessAssignTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('weld_process_assign', function (Blueprint $table) {
            $table->foreign('asme_var_id', 'asme_var_assign_fk')->references('asme_var_id')->on('asme_var')->onUpdate('RESTRICT')->onDelete('RESTRICT');
            $table->foreign('asme_weld_processes_id', 'asme_weld_process_fk')->references('asme_weld_process_id')->on('asme_weld_processes')->onUpdate('RESTRICT')->onDelete('RESTRICT');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('weld_process_assign', function (Blueprint $table) {
            $table->dropForeign('asme_var_assign_fk');
            $table->dropForeign('asme_weld_process_fk');
        });
    }
}
