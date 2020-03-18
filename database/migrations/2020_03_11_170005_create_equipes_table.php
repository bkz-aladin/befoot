<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEquipesTable extends Migration {

	public function up()
	{
		Schema::create('equipes', function(Blueprint $table) {
			$table->increments('id');
			$table->string('nom', 255)->unique();
			$table->integer('contact')->nullable();
			$table->string('email', 255)->unique();
			$table->string('commune', 255);
			$table->integer('user_id')->unique();
			$table->string('logo')->unique();
			$table->timestamps();
		});
	}

	public function down()
	{
		
		Schema::dropIfExists('equipes');
	}
}