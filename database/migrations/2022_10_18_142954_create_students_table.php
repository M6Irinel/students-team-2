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
        Schema::create('students', function (Blueprint $t) {
            $t->id();
            $t->string('name');
            $t->string('surname');
            $t->mediumInteger('registration_number')->unique()->unsigned();
            $t->date('date_of_birth');
            $t->date('enrolment_date');
            $t->string('email')->unique();
            $t->string('telephone_number',14)->unique()->nullable();
            $t->string('fiscal_code',16)->unique();
            $t->timestamps();
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
