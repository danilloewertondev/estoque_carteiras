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

<div class="container"><div class="col-xs-12 col-sm-5 col-sm-offset-4 col-md-6 col-md-offset-4 margembt"><h2>Adicionar remessa</h2></div></div>


<div class="margemlf col-xs-12 col-sm-6  col-md-9">
	<form action="/produtos/adiciona" method="post">

		<input type="hidden" 
		name="_token" value="{{{ csrf_token() }}}" />

		<div class="form-group col-md-2">
			<label>Cor</label>
			<input name="cor" 
			class="form-control" value="{{ old('cor') }}" />
		</div>
		<div class="form-group col-md-2">
			<label>Quantidade</label>
			<input type="number" name="quantidade" class="form-control" 
			value="{{ old('quantidade') }}"/>
		</div>
		<div class="form-group col-md-2">
			<label>Referencia </label>
			<select name="referencia_id" class="form-control">
				@foreach($referencias as $r)

				<option value="{{$r->id}}"> {{$r->nome_referencia}}</option>

				@endforeach
			</select>

		</div>

		<div class="form-group col-md-2">
			<label>Tipo de couro </label>
			<select name="tipodecouro_id" class="form-control">
				@foreach($tipodecouros as $tpc)

				<option value="{{$tpc->id}}"> {{$tpc->nome_couro}}</option>

				@endforeach
			</select>
		</div>

		<div class="form-group col-md-2">

			<button type="submit" class="btn 
			btn-success btn-block margem">Adicionar</button>
		</div>
	</form>
	
</div>
@stop

@stop

