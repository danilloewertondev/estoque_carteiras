@extends('layout.principal')

@section('conteudo')

<h1>Novo tipo de couro</h1>

<form action="/tipodecouros/adiciona" method="post">

	<input type="hidden" 
	name="_token" value="{{{ csrf_token() }}}" />

	<div class="form-group">
		<label>Nome ddo tipo de couro</label>
		<input name="nome_couro" 
		class="form-control" value="{{ old('nome_couro') }}" />
	</div>
	
	
	<button type="submit" class="btn 
	btn-primary btn-block">Adicionar</button>
</form>

@stop
