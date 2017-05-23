<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use estoque\Produto;

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();

		$this->call('ProdutoTableSeeder');
	}

}

class ProdutoTableSeeder extends Seeder{
	public function run(){
		Produto::create(['cor'=>'preto','quantidade'=>'100', 'referencia_id'=>1]);
		Produto::create(['cor'=>'marrom','quantidade'=>'150', 'referencia_id'=>2]);
	
	}
}
