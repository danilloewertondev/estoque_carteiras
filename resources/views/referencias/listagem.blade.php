@extends('layout.principal')
@extends('layout.menu')

@section('conteudo')
@section('menu')	
@stop
<div class="container"><div class="margemh3 col-xs-12 col-sm-5 col-md-6"><h3>Referencias</h3></div></div>
</div>

<div class="container-fluid">
	<div class="col-sm-12 col-md-12  col-lg-12">
		<div class="table-responsive">	
			<table class="table table-striped table-condensed table-hover">

				<tr>
					<th>Nome da Referencia</th>
					<th>Valor</th>
					<th>Excluir</th>
					<th>Alterar</th>

				</tr>



				@foreach ($referencias as $r)
				<tr> 
					<td>{{$r->nome_referencia}}</td>
					<td>R$: {{$r->valor}}</td>

					<td> 
						<a href="{{action('ReferenciaController@remove', $r->id)}}"> 
							<span class="glyphicon glyphicon-trash"></span>
						</a>
					</td>

					<td> 
						<a href="/referencias/busca/{{$r->id}}"> 
							<span class="glyphicon glyphicon-pencil"></span>
						</a>
					</td>




				</tr>
				@endforeach
			</table>
		</div>
	</div>
</div>
@stop

