<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePatientTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patients', function(Blueprint $table) {
            $table->increments('id');
            $table->string('name')->nullable();
            $table->string('gender')->nullable();
            $table->date('text')->nullable();
            $table->text('address')->nullable();
            $table->string('born_date')->nullable();
            $table->string('phone_number')->nullable();
            $table->string('blood_type')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
