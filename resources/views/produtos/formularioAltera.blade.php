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

<div class="container"><div class="col-xs-12 col-sm-5 col-sm-offset-4 col-md-4 col-md-offset-5  margembt"><h3>Alterar remessa</h3></div></div>


<div class="margemlf2 col-xs-12 col-sm-6  col-md-8">


	<form action="/produtos/alterado/{{$p->id}}" method="post">

		<input type="hidden" 
		name="_token" value="{{{ csrf_token() }}}" />

		<div class="form-group col-md-2">
			<label>Cor</label>
			<input name="cor" class="form-control" value="{{ $p->cor }}" />
		</div>
		<div class="form-group col-md-2">
			<label>Quantidade</label>
			<input type="number" name="quantidade" class="form-control" value="{{ $p->quantidade }}"/>
		</div>
		<div class="form-group col-md-2">
			<label>Referencia </label>

			<select name="referencia_id" class="form-control col-md-2" >
				@foreach($r as $ref)
				@if($ref->id  ==  $p->referencia_id )
				<option selected value="{{ $ref->id }}">{{ $ref->nome_referencia }}</option>
				@else
				<option value="{{ $ref->id }}">{{ $ref->nome_referencia }}</option>
				@endif        
				@endforeach
			</select> 

		</div>

		<div class="form-group col-md-2">
			<label>Tipo de Couro </label>

			<select name="tipodecouro_id" class="form-control" >
				@foreach($tipodecouros as $t)
				@if($t->id  ==  $p->referencia_id )
				<option selected value="{{ $t->id }}">{{ $t->nome_couro }}</option>
				@else
				<option value="{{ $t->id }}">{{ $t->nome_couro }}</option>
				@endif        
				@endforeach
			</select> 

		</div>
		<div class="form-group col-md-2">
		<button type="submit" class="btn btn-success btn-block margem">Alterar</button>
		</div>
	</form>
</div>
@stop
@stop
