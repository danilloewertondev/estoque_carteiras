@extends('layout.principal')

@section('conteudo')

@if (count($errors) > 0)
<div class="alert alert-danger">
	@foreach($errors->all() as $error) 
	<ul> 
		<li>{{$error}}</li>
	</ul>
	@endforeach
</div>
@endif

<h1>Nova referencia</h1>

<form action="/referencias/adiciona" method="post">

	<input type="hidden" 
	name="_token" value="{{{ csrf_token() }}}" />

	<div class="form-group">
		<label>Nome da referência</label>
		<input name="nome_referencia" 
		class="form-control" value="{{ old('nome_referencia') }}" />
	</div>
	<div class="form-group">
		<label>valor da referencia</label>
		<input type="number" step="any" name="valor" class="form-control" 
		value="{{ old('valor') }}"/>
	</div>


	
	<button type="submit" class="btn 
	btn-primary btn-block">Adicionar</button>
</form>

@stop
