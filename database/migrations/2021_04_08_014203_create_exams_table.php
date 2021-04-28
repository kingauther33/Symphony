<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exams', function (Blueprint $table) {
            $table->id();

//            $table->integer('exam_type_id')->unsigned();
//            $table->integer('training_department_id')->unsigned();
//            $table->integer('subject_id')->unsigned();

            $table->integer('counselor_id')->unsigned();

            $table->text('name');
            $table->date('start_date');
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
        Schema::dropIfExists('exams');
    }
}
