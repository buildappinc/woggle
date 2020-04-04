<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCourseDifficultyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('course_difficulty', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('course_id');
            $table->unsignedBigInteger('difficulty_id');
            $table->timestamps();

            $table->unique(['course_id', 'difficulty_id']);

            $table->foreign('course_id')->references('id')->on('courses')->onDelete('cascade');
            $table->foreign('difficulty_id')->references('id')->on('difficulties')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('course_difficulty');
    }
}
