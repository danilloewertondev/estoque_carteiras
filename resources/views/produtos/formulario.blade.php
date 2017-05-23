@extends('layout.principal')

@section('conteudo')

<h1>Novo produto</h1>

<form action="/produtos/adiciona" method="post">

	<input type="hidden" 
	name="_token" value="{{{ csrf_token() }}}" />

	<div class="form-group">
		<label>Cor</label>
		<input name="cor" 
		class="form-control" value="{{ old('cor') }}" />
	</div>
	<div class="form-group">
		<label>Quantidade</label>
		<input type="number" name="quantidade" class="form-control" 
		value="{{ old('quantidade') }}"/>
	</div>
	<div class="form-group">
		<label>Referencia </label>
		<select name="referencia_id">
			@foreach($referencias as $r)

			<option value="{{$r->id}}"> {{$r->nome_referencia}}</option>

			@endforeach
		</select>
		
	</div>

	<div class="form-group">
		<label>Tipo de couro </label>
		<select name="tipodecouro_id">
			@foreach($tipodecouros as $tpc)

			<option value="{{$tpc->id}}"> {{$tpc->nome_couro}}</option>

			@endforeach
		</select>
	</div>
	
	
	<button type="submit" class="btn 
	btn-primary btn-block">Adicionar</button>
</form>

@stop
