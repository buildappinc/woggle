<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserresultsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('userresults', function (Blueprint $table) {
            $table->id();
            $table->unsignedInterger('user_id');
            $table->string('course');
            $table->string('yes_ans');
            $table->string('no_ans'); 
            $table->string('result');
            $table->boolean('status')->default("true");
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
        Schema::dropIfExists('userresults');
    }
}
