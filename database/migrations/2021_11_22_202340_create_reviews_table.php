<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReviewsTable extends Migration
{
	public function up()
	{
		Schema::create('reviews', function (Blueprint $table) {
			$table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('course_id');
            $table->integer('rating')->nullable();
            $table->text('review');
            $table->smallInteger('status')->default(1);
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::dropIfExists('reviews');
	}
}
