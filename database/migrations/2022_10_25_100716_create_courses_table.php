<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $t) {
            $t->id();
            $t->unsignedBigInteger('degree_id');
            $t->string('name');
            $t->text('description')->nullable();
            $t->string('period');
            $t->tinyInteger('year');
            $t->tinyInteger('cfu');
            $t->string('website')->nullable();
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
        Schema::dropIfExists('courses');
    }
}
