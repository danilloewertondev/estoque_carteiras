<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProdutosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('produtos', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('cor');
			$table->integer('quantidade');
			$table->float('preco_unitario');
			$table->integer('referencia_id');
			$table->integer('tipo_id');
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('produtos');
	}

}
