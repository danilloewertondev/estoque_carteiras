@extends('layout.principal')

@section('conteudo')	
<table class="table">
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
@stop

