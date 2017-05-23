@extends('layout.principal')

@section('conteudo')

<h1>Alterar produto</h1>

<h1 class="center">Atualizar produto:</h1>
<form action="/referencias/alterado/{{$r->id}}" method="post">

	<input type="hidden" 
	name="_token" value="{{{ csrf_token() }}}" />

	<div class="form-group">
		<label>Cor</label>
		<input name="nome_referencia" class="form-control" value="{{ $r->nome_referencia }}" />
	</div>
	<div class="form-group">
		<label>Quantidade</label>
		<input type="number" step="any" name="valor" class="form-control" value="{{ $r->valor }}"/>
	</div>
	
	</div>
	
	<button type="submit" class="btn btn-primary btn-block">Aletrar</button>
</form>

@stop
