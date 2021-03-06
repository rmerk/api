<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToUserDataWelderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('UserData.welder', function (Blueprint $table) {
            $table->foreign('division_id', 'welder_division_id_fk')->references('division_id')->on('UserData.division')->onUpdate('RESTRICT')->onDelete('RESTRICT');
            $table->foreign('record_id', 'welder_fk')->references('record_id')->on('UserData.record')->onUpdate('RESTRICT')->onDelete('RESTRICT');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('UserData.welder', function (Blueprint $table) {
            $table->dropForeign('welder_division_id_fk');
            $table->dropForeign('welder_fk');
        });
    }
}
