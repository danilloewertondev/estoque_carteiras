<?php namespace estoque\Http\Controllers;

use estoque\Produto;
use Request;
use estoque\Referencia;
use estoque\TipoDeCouro;

class ProdutoController extends Controller{

	public function lista(){

		$produtos = Produto::all();
		return view('produtos/listagem')->with('produtos', $produtos);
		
	}

	public function novo(){
		$produtos = Produto::all();
		return view('produtos/formulario')->with('referencias', Referencia::all())->with('tipodecouros', TipoDeCouro::all());
	}

	public function adiciona(){
		Produto::create(Request::all());
		return redirect()
		->action('ProdutoController@lista');
	}

	public function remove($id){
		$produto = Produto::find($id);
		$produto->delete();
		return redirect()->action('ProdutoController@lista');
	}
	//busca para alterar
	public function busca($id){
		$resposta = Produto::find($id);

		if(empty($resposta)) {
			return "Esse produto não existe";
		}
		return view('produtos/formularioAltera')->with('p', $resposta)->with('r', Referencia::all());

	}

	public function alterado($id){

		$produto = Produto::find($id);
		$valores = Request::all();

		$produto->fill($valores)->save();

		return redirect()->action('ProdutoController@lista');


	}


}