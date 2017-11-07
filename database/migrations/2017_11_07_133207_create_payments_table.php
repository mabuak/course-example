<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('course_id')->unsigned();
            $table->integer('student_id')->unsigned();
            $table->double('amount');
            $table->date('date');
            $table->boolean('status');
            $table->timestamps();

            $table->foreign('course_id')
                ->references('id')->on('courses')
                ->onDelete('cascade');

            $table->foreign('student_id')
                ->references('id')->on('students')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('payments');
    }
}
