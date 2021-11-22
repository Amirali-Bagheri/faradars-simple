<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVideosTable extends Migration
{
	public function up()
	{
		Schema::create('videos', function (Blueprint $table) {
			$table->id();
            $table->string('title', 60);
            $table->unsignedBigInteger('course_id');

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
