<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CourseUsers extends Migration
{
	public function up()
	{
		Schema::create('course_users', function (Blueprint $table) {
            $table->unsignedBigInteger('course_id');
            $table->unsignedBigInteger('user_id');
            $table->float('price');
            $table->timestamps();

            $table->primary(['course_id', 'user_id']);

            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('course_id')->references('id')->on('courses');
		});
	}

	public function down()
	{
		Schema::dropIfExists('');
	}
}
