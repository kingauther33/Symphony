<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVisitorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('visitors', function (Blueprint $table) {
            $table->id()->nullable();

            $table->string('fname');
            $table->string('lname');
            $table->string('email');
            $table->string('phone');
            $table->date('dob')->nullable();
            $table->string('address', 255)->nullable();
            $table->tinyInteger('status')->nullable();
            $table->integer('entrance_mark')->nullable();
            $table->integer('course_id');


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
        Schema::dropIfExists('visitors');
    }
}
