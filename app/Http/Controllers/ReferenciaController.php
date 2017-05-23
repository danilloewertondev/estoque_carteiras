<?php namespace estoque\Http\Controllers;

use estoque\Referencia;
use estoque\Produto;
use Request;
use estoque\Http\Requests\ReferenciaRequest;


class ReferenciaController extends Controller{

	public function lista(){

		$referencias = Referencia::all();
		return view('referencias/listagem')->with('referencias', $referencias);
		
	}

	public function novo(){
		$referencias = Referencia::all();
		return view('referencias/formulario')->with('referencias', Referencia::all());
	}

	public function adiciona(ReferenciaRequest $referenciaRequest){
		Referencia::create($referenciaRequest->all());
		return redirect()
		->action('ReferenciaController@lista');
	}

	public function remove($id){
		$referencias = Referencia::find($id);
		$referencias->delete();
		return redirect()->action('ReferenciaController@lista');
	}
		//busca para alterar
	public function busca($id){
		$resposta = Referencia::find($id);

		if(empty($resposta)) {
			return "Essa Referencia não existe";
		}
		return view('referencias/formularioAltera')->with('r', $resposta);

	}

	public function alterado(ReferenciaRequest $referenciaRequest, $id){

		$referencia = Referencia::find($id);
		$valores = $referenciaRequest->all();

		$referencia->fill($valores)->save();

		return redirect()->action('ReferenciaController@lista');


	}


}