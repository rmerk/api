<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToUserDataUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('UserData.users', function (Blueprint $table) {
            $table->foreign('division_id', 'users_division_id_fk')->references('division_id')->on('UserData.division')->onUpdate('RESTRICT')->onDelete('RESTRICT');
            $table->foreign('record_id', 'users_record_id_fk')->references('record_id')->on('UserData.record')->onUpdate('RESTRICT')->onDelete('RESTRICT');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('UserData.users', function (Blueprint $table) {
            $table->dropForeign('users_division_id_fk');
            $table->dropForeign('users_record_id_fk');
        });
    }
}
