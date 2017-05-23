<?php namespace estoque\Http\Requests;

use estoque\Http\Requests\Request;

class TipoDeCouroRequest extends Request {


	public function authorize()
	{
		return true;
	}


	public function rules()
	{
		return [
			'nome_couro' => 'required|min:3'
			
		];
	}

	public function messages(){
		return [
			'required' => 'O campo ":attribute" eh obrigatorio!'

			];
	}

}

