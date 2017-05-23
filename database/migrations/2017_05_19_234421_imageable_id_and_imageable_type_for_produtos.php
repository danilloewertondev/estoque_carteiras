<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ImageableIdAndImageableTypeForProdutos extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('produtos', function(Blueprint $table)
		{
			$table->integer('imageable_id');
			$table->string('imageable_type');
			
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('imageable_id');
		Schema::drop('imageable_type');
	}

}
