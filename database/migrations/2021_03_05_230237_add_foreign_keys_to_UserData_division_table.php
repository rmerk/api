<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToUserDataDivisionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('UserData.division', function (Blueprint $table) {
            $table->foreign('company_id', 'division_fk')->references('company_id')->on('UserData.company')->onUpdate('RESTRICT')->onDelete('RESTRICT');
            $table->foreign('record_id', 'division_record_id_fk')->references('record_id')->on('UserData.record')->onUpdate('RESTRICT')->onDelete('RESTRICT');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('UserData.division', function (Blueprint $table) {
            $table->dropForeign('division_fk');
            $table->dropForeign('division_record_id_fk');
        });
    }
}
