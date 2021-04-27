<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrainingDepartmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('training_departments', function (Blueprint $table) {
            $table->id();

            $table->integer('user_id')->unique()->unsigned();

            $table->string('avatar')->nullable();
            $table->string('fname');
            $table->string('lname');
            $table->date('dob');
            $table->string('phone');
            $table->date('last_login_date')->nullable();
            $table->string('last_login_ip')->nullable();

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
        Schema::dropIfExists('training_departments');
    }
}
