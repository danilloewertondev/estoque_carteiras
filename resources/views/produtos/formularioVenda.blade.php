@extends('layout.principal')
@extends('layout.menu')

@section('conteudo')
@section('menu')

<style type="text/css">
	.margemRef{margin-left: 6%;}
	.centerH1{text-align: center;}
</style>

<form action="/produtos/venda/{{$p->id}}" method="post">



	<h2 class="centerH1">Venda</h2>
	<div class="container"><div class="col-xs-12 col-sm-5 col-sm-offset-4 col-md-9 col-md-offset-2  margembt"> 

		<input type="hidden" 
		name="_token" value="{{{ csrf_token() }}}" />

		
		
		<div class="form-group col-md-1">
			<input type="hidden" name="quantidade" class="form-control" value="{{ $p->quantidade }}"/>
		</div>

		<div class="col-md-3  ">
			<label>Referencia</label>
			<select disabled="" name="referencia_id" class="form-control" >
				@foreach($r as $ref)
				@if($ref->id  ==  $p->referencia_id )
				<option selected value="{{ $ref->id }}">{{ $ref->nome_referencia }}</option>
				@else
				<option value="{{ $ref->id }}">{{ $ref->nome_referencia }}</option>
				@endif        
				@endforeach
			</select> 


		</div>
		<div class="form-group col-md-3">
			<label>Quantidade vendida</label>
			<input type="number" name="quantidadeVendida" class="form-control" "/>
		</div>

		
		<div class="form-group col-md-2">
			<button type="text" class="btn btn-success btn-block margem">Salvar</button>
		</div>
	</form>
</div>
@stop
@stop
