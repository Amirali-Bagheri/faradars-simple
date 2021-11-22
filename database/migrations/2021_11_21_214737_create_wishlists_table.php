<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWishlistsTable extends Migration
{
	public function up()
	{
		Schema::create('wishlists', function (Blueprint $table) {
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('course_id');

            $table->primary(['user_id', 'course_id']);

            $table->foreign('user_id')->references('id')->on('users')->onDelete('CASCADE');
            $table->foreign('course_id')->references('id')->on('courses')->onDelete('CASCADE');
		});
	}

	public function down()
	{
		Schema::dropIfExists('wishlists');
	}
}
