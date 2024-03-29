<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCheckListTblTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('check_list_tbl', function (Blueprint $table) {
            $table->id();
            $table->string('no_id')->nullable();
            $table->string('name')->nullable();
            $table->string('age')->nullable();
            $table->string('birth')->nullable();
            $table->string('chield_blood')->nullable();
            $table->string('description')->nullable();
            $table->string('status')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('check_list_tbl');
    }
}
