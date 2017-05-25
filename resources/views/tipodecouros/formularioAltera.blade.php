@extends('layout.principal')
@extends('layout.menu')

@section('conteudo')
@section('menu')



<div class="container"><div class="col-xs-12 col-sm-5 col-sm-offset-4 col-md-6 col-md-offset-4 margembt"><h3>Atualizar Tipo de Couro</h3></div></div>


<div class="margemTipoDeCouroAtualiza col-xs-12 col-sm-6  col-md-9">


	<form action="/tipodecouros/alterado/{{$t->id}}" method="post">

		<input type="hidden" 
		name="_token" value="{{{ csrf_token() }}}" />

		<div class="form-group col-md-5">
			<label>Tipo de couro</label>
			<input type="text" name="nome_couro" class="form-control" value="{{ $t->nome_couro }}" />
		</div>
		
		<div class="form-group col-md-2 margem">
			<button type="submit" class="btn btn-primary btn-block">Alterar</button>
		</div>
	</form>
</div>


@stop
@stop
