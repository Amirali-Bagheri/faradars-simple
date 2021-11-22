<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEnrollsTable extends Migration
{
	public function up()
	{
		Schema::create('enrolls', function (Blueprint $table) {
			$table->bigIncrements('id');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('course_id');
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::dropIfExists('enrolls');
	}
}
