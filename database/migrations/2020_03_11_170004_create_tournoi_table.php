<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTournoiTable extends Migration {

	public function up()
	{
		Schema::create('tournoi', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('nom', 255)->unique()->default('Tournament');
			$table->string('logo')->unique()->nullable();
			$table->integer('nbr_participant')->unsigned();
			$table->integer('participation')->unsigned();
			$table->text('prix1');
			$table->text('prix2');
			$table->text('prix3')->nullable();
			$table->text('description');
			$table->string('region', 255);
			// $table->integer('user_id');
			$table->foreignId('user_id')->constrained()
						->onDelete('restrict')
						->onUpdate('restrict');
		});
	}

	public function down()
	{
		Schema::table('tournoi', function(Blueprint $table) {
			$table->dropForeign('tournoi_user_id_foreign');
		});
		
		Schema::dropIfExists('tournoi');
	}
}