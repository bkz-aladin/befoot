<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMatchsTable extends Migration {

	public function up()
	{
		Schema::create('matchs', function(Blueprint $table) {
			$table->increments('id');
			$table->string('equipe1');
			$table->string('equipe2');
			$table->datetime('start_time');
			$table->datetime('end_time');
			$table->integer('score1');
			$table->integer('score2');
			$table->integer('status');
			$table->string('winner');
			$table->integer('tournoi_id')->unsigned();
			$table->foreign('tournoi_id')->references('id')->on('tournoi')
						->onDelete('restrict')
						->onUpdate('restrict');
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema:table('matchs',function(Blueprint $table){
			$table->dropForeign('matchs_tournois_id_foreign');
		});

		Schema::dropIfExists('matchs');
	}
}