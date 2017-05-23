@extends('layout.principal')

@section('conteudo')
<h1 class="center">Atualizar tipo de couro</h1>
<form action="/tipodecouros/alterado/{{$t->id}}" method="post">

	<input type="hidden" 
	name="_token" value="{{{ csrf_token() }}}" />

	<div class="form-group">
		<label>nome do tipo de couro</label>
		<input name="nome_couro" class="form-control" value="{{ $t->nome_couro }}" />
	</div>
	<
	
	</div>
	
	<button type="submit" class="btn btn-primary btn-block">Alterar</button>
</form>

@stop
