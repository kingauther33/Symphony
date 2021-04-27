<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();

            $table->integer('user_id')->unique()->unsigned();
            $table->integer('grade_id')->unsigned();

            $table->string('avatar')->nullable();
            $table->string('fname');
            $table->string('lname');
            $table->date('dob');
            $table->string('phone');
            $table->string('address', 255);
            $table->date('date_of_join');
            $table->tinyInteger('status');
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
        Schema::dropIfExists('students');
    }
}
