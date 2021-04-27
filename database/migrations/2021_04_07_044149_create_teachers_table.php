<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeachersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teachers', function (Blueprint $table) {
            $table->id();

            $table->integer('user_id')->unique()->unsigned();

            $table->string('avatar')->nullable();
            $table->string('fname');
            $table->string('lname');
            $table->date('dob');
            $table->string('address', 255);
            $table->string('phone');
            $table->string('specialty');
            $table->string('comment', 1000)->nullable();
            $table->date('last_login_date');
            $table->string('last_login_ip');

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
        Schema::dropIfExists('teachers');
    }
}
