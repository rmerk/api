<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAsmeVarTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('asme_var', function (Blueprint $table) {
            $table->integer('asme_var_id', true);
            $table->string('asme_var_num', 20)->unique('asme_var_un');
            $table->text('asme_var_desc');
            $table->string('asme_var_logic')->nullable();
            $table->integer('asme_var_grp_id')->nullable();
            $table->integer('standards_id')->nullable();
            $table->integer('weld_process_assign_id')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('asme_var');
    }
}
