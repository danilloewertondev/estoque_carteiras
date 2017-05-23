<?php namespace estoque\Http\Requests;

use estoque\Http\Requests\Request;

class ProdutoRequest extends Request {

	public function authorize()
	{
		return true;
	}


	public function rules()
	{
		return [
			'cor' => 'required|min:3',
			'quantidade' => 'required|numeric', 
			'referencia_id' => 'required',
			'tipodecouro_id' => 'required'
		];
	}

	public function messages(){
		return [
			'required' => 'O campo ":attribute" eh obrigatorio!'

			];
	}

}
