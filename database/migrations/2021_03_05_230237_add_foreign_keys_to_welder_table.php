<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToWelderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('welder', function (Blueprint $table) {
            $table->foreign('division_id', 'welder_division_fk')->references('division_id')->on('division')->onUpdate('RESTRICT')->onDelete('RESTRICT');
            $table->foreign('record_id', 'welder_record_fk')->references('record_id')->on('record')->onUpdate('RESTRICT')->onDelete('RESTRICT');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('welder', function (Blueprint $table) {
            $table->dropForeign('welder_division_fk');
            $table->dropForeign('welder_record_fk');
        });
    }
}
