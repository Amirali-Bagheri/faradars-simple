<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLessonsTable extends Migration
{
	public function up()
	{
		Schema::create('lessons', function (Blueprint $table) {
			$table->id();
            $table->string('title');
            $table->unsignedBigInteger('course_id');

            $table->string('duration')->nullable();

            $table->unsignedTinyInteger('sort');
            $table->string('path');
            $table->timestamps();

            $table->foreign('course_id')->references('id')->on('courses')->onDelete('CASCADE');
		});
	}

	public function down()
	{
		Schema::dropIfExists('videos');
	}
}
