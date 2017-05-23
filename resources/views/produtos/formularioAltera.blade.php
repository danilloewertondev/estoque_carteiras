@extends('layout.principal')

@section('conteudo')

<h1>Novo produto</h1>

<h1 class="center">Atualizar produto:</h1>
<form action="/produtos/alterado/{{$p->id}}" method="post">

	<input type="hidden" 
	name="_token" value="{{{ csrf_token() }}}" />

	<div class="form-group">
		<label>Cor</label>
		<input name="cor" class="form-control" value="{{ $p->cor }}" />
	</div>
	<div class="form-group">
		<label>Quantidade</label>
		<input type="number" name="quantidade" class="form-control" value="{{ $p->quantidade }}"/>
	</div>
	<div class="form-group">
		<label>Referencia </label>
		
		 <select name="referencia_id" class="form-control" >
			@foreach($r as $ref)
			@if($ref->id  ==  $p->referencia_id )
			<option selected value="{{ $ref->id }}">{{ $ref->nome_referencia }}</option>
			@else
			<option value="{{ $ref->id }}">{{ $ref->nome_referencia }}</option>
			@endif        
			@endforeach
		</select> 

	</div>
	
	<button type="submit" class="btn btn-primary btn-block">Adicionar</button>
</form>

@stop