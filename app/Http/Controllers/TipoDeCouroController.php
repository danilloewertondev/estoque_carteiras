<?php namespace estoque\Http\Controllers;

use estoque\Referencia;
use estoque\Produto;
use estoque\TipoDeCouro;
use Request;
use estoque\Http\Requests\TipoDeCouroRequest;


class TipoDeCouroController extends Controller{

	public function lista(){

		$tipodecouros = TipoDeCouro::all();
		return view('tipodecouros/listagem')->with('tipodecouros', $tipodecouros);
		
	}

	public function novo(){
		$tipodecouros = TipoDeCouro::all();
		return view('tipodecouros/formulario')->with('tipodecouros', TipoDeCouro::all());
	}

	public function adiciona(TipoDeCouroRequest $tipoDeCouroRequest){
		TipoDeCouro::create($tipoDeCouroRequest->all());
		return redirect()
		->action('TipoDeCouroController@lista');
	}

	public function remove($id){
		$tipodecouros = TipoDeCouro::find($id);
		$tipodecouros->delete();
		return redirect()->action('TipoDeCouroController@lista');
	}
		//busca para alterar
	public function busca($id){
		$resposta = TipoDeCouro::find($id);

		if(empty($resposta)) {
			return "Essa TipoDeCouro não existe";
		}
		return view('tipodecouros/formularioAltera')->with('t', $resposta);

	}

	public function alterado($id){

		$tipodecouros = TipoDeCouro::find($id);
		$valores = Request::all();

		$tipodecouros->fill($valores)->save();

		return redirect()->action('TipoDeCouroController@lista');


	}


}