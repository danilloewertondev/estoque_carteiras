@extends('layout.principal')
@extends('layout.menu')

@section('conteudo')
@section('menu')
@if (count($errors) > 0)
<div class="alert alert-danger">
	@foreach($errors->all() as $error) 
	<ul> 
		<li>{{$error}}</li>
	</ul>
	@endforeach
</div>
@endif



<div class="container"><div class="col-xs-12 col-sm-5 col-sm-offset-4 col-md-6 col-md-offset-4 margembt"><h2>Novo Tipo de Couro</h2></div></div>


<div class="margemTipoDeCouro col-xs-12 col-sm-6  col-md-9">



	<form action="/tipodecouros/adiciona" method="post">

		<input type="hidden" 
		name="_token" value="{{{ csrf_token() }}}" />

		<div class="form-group col-md-5">
			<label>Nome do tipo de couro</label>
			<input name="nome_couro" 
			class="form-control" value="{{ old('nome_couro') }}" />
		</div>

		<div class="form-group col-md-2 margem">
			<button type="submit" class="btn 
			btn-success btn-block">Adicionar</button>
		</div>
	</form>
</div>


@stop
@stop
