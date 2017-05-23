<?php namespace estoque\Http\Requests;

use estoque\Http\Requests\Request;

class ReferenciaRequest extends Request {

	public function authorize()
	{
		return true;
	}


	public function rules()
	{
		return [
			'nome_referencia' => 'required|min:3',
			'valor' => 'required|numeric'
		];
	}

	public function messages(){
		return [
			'required' => 'O campo ":attribute" eh obrigatorio!'

			];
	}

}

