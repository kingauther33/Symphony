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

            $table->integer('exam_id')->unsigned()->nullable();
            $table->integer('course_id')->unsigned();

            $table->string('fname');
            $table->string('lname');
            $table->string('email');
            $table->string('phone');
            $table->date('dob')->nullable();
            $table->string('address', 255)->nullable();
            $table->tinyInteger('status')->nullable();
            $table->integer('entrance_mark')->nullable();
            $table->integer('isDeleted')->default(0);

            $table->timestamps();
            $table->softDeletes();

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
