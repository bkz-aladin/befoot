<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePublicationsTable extends Migration {

	public function up()
	{
		Schema::create('publications', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('titre');
			$table->text('contenu');
			$table->string('image')	;
			$table->foreignId('user_id')->constrained()
						->onDelete('restrict')
						->onUpdate('restrict');
		});
	}

	public function down()
	{
		Schema::table('publications', function(Blueprint $table) {
			$table->dropForeign('publications_user_id_foreign');
		});
		
		
		Schema::dropIfExists('publications');
	}
}