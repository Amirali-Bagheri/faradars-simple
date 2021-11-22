<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoursesTable extends Migration
{
	public function up()
	{
		Schema::create('courses', function (Blueprint $table) {
			$table->id();
            $table->unsignedBigInteger('category_id');
            $table->unsignedBigInteger('author_id');
            $table->string('title');
            $table->string('slug')->unique();
            $table->text('short_description')->nullable();
            $table->longText('description')->nullable();
            $table->float('price')->default(0);
            $table->float('discount')->default(0);
            $table->string('thumbnail')->nullable();
            $table->float('rating')->default(0);

            $table->text('outcomes')->nullable();
            $table->text('section')->nullable();
            $table->text('requirements')->nullable();
            $table->string('language')->default('fa');
            $table->string('level', 50)->nullable();
            $table->string('video_url')->nullable();

            $table->unsignedInteger('student_count')->default(0);
            $table->unsignedTinyInteger('status')->index()->default(1);

            $table->foreign('author_id')->references('id')->on('users')->onDelete('CASCADE');
            $table->foreign('category_id')->references('id')->on('categories');

            $table->timestamps();
		});
	}

	public function down()
	{
		Schema::dropIfExists('courses');
	}
}
