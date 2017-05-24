<?php namespace estoque\Http\Controllers;

use estoque\Http\Requests;
use estoque\Http\Controllers\Controller;
use Request;
use Auth;

class LoginController extends Controller {

	public function form(){
		return view('form_login');
	}

	public function login(){

		//pegar as credenciais
		$credenciais = Request::only('email','password');

		//fazer login
		//se as credenciais existem mostra
		if(Auth::attempt($credenciais)){
			return redirect('/produtos');;
		}else{
			return "O usuario não esta logado";
		}

		//retornar pagina
	}

}
