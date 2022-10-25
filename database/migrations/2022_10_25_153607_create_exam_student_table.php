<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExamStudentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exam_student', function (Blueprint $t) {
            $t->unsignedBigInteger('exam_id');
            $t->unsignedBigInteger('student_id');

            $t->foreign('exam_id')->references('id')->on('exams')->onDelete('cascade')->onUpdate('cascade');
            $t->foreign('student_id')->references('id')->on('students')->onDelete('cascade')->onUpdate('cascade');

            $t->primary(['exam_id', 'student_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('exam_student');
    }
}
