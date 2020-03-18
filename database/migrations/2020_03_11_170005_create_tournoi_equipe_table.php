<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTournoiEquipeTable extends Migration {

	public function up()
	{
		Schema::create('tournoi_equipe', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->integer('equipe_id')->unsigned();
			$table->integer('tournoi_id')->unsigned();
			$table->integer('match')->default('0');
			$table->integer('victoire')->default('0');
			$table->integer('nul')->default('0');
			$table->integer('defaite')->default('0');
			$table->integer('but_encaisse')->default('0');
			$table->integer('but_marque')->default('0');

			$table->foreign('equipe_id')->references('id')->on('equipes')
						->onDelete('restrict')
						->onUpdate('restrict');

			$table->foreign('tournoi_id')->references('id')->on('tournoi')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
	}

	public function down()
	{
		Schema::table('tournoi_equipe', function(Blueprint $table) {
			$table->dropForeign('tournoi_equipe_equipe_id_foreign');
			$table->dropForeign('tournoi_equipe_tournoi_id_foreign');
		});
		Schema::dropIfExists('tournoi_equipe');
	}
}