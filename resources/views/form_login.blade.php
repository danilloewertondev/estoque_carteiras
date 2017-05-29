@extends('layout.principal')

@section('conteudo')



<header>
	



	<div class="carteira-banner">
	<div ><h2 id="tituloCenter">Sistema de Estoque de Carteiras</h2></div><br>

			<form class="center" action="/login" method="post">

				<input type="hidden" name="_token" value="{{{ csrf_token() }}}" />

				<div class="form-group col-sm-5 col-md-5">
					<label>E-mail</label>
					<input name="email" class="form-control" placeholder="Digite seu E-mail" />
				</div>

				<div class="form-group col-sm-3 col-md-4">
					<label>Senha</label>
					<input type="password" name="password" class="form-control" placeholder="Senha" />
				</div>	

				<div class="form-group col-sm-3 col-md-2 margem">
					<button type="submit" class="btn 
					btn-primary btn-block">Login</button>
				</div>
			</form>
		
	</div>

</header>

@stop
