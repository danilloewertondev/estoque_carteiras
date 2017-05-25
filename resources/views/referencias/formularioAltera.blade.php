@extends('layout.principal')
@extends('layout.menu')

@section('conteudo')
@section('menu')
@stop
@if (count($errors) > 0)
<div class="alert alert-danger">
	@foreach($errors->all() as $error) 
	<ul> 
		<li>{{$error}}</li>
	</ul>
	@endforeach
</div>
@endif


<div class="container"><div class="col-xs-12 col-sm-5 col-sm-offset-4 col-md-6 col-md-offset-4 margembt"><h2>Atualizar Rerefencia</h2></div></div>


<div class="margemlf col-xs-12 col-sm-6 col-md-9" id="margemlf">



	<form action="/referencias/alterado/{{$r->id}}" method="post">

		<input type="hidden" name="_token" value="{{{ csrf_token() }}}" />

		<div class="form-group col-md-3">
			<label>Rerencia</label>
			<input name="nome_referencia" class="form-control" value="{{ $r->nome_referencia }}" />
		</div>
		<div class="form-group col-md-3">
			<label>Valor</label>
			<input type="number" step="any" name="valor" class="form-control" value="{{ $r->valor }}"/>
		</div>


		<div class="form-group col-md-3">
			<button type="submit" class="btn btn-primary btn-block margem">Aletrar</button>
		</div>
	</form>
</div>


@stop