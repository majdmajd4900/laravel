<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersSubjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users_subjects', function (Blueprint $table) {
            $table->id();
            $table->string('user_Id');
            $table->string('subject_Id');
            $table->foreign('user_Id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('subject_Id')->references('id')->on('subjects')->onDelete('cascade');
            $table->unique(['user_Id','subject_Id']);
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
        Schema::dropIfExists('users_subjects');
    }
}
