<?php namespace estoque\Http\Middleware;

use Closure;

class Autorizador {


	public function handle($request, Closure $next)
	{
		//se não tiver logado manda para pagina de login
		if (!$request->is('login') && \Auth::guest()){
			return redirect('/login');
		}
		return $next($request);
	}

}
