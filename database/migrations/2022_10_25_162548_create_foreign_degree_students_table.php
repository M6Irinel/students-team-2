<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateForeignDegreeStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('students', function (Blueprint $t) {
            $t->unsignedBigInteger('degree_id')->after('id')->nullable();

            $t->foreign('degree_id')->references('id')->on('degrees')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('students', function (Blueprint $t) {
            $t->dropForeign(['degree_id']);

            $t->dropColumn('degree_id');
        });
    }
}