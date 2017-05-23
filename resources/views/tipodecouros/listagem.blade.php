@extends('layout.principal')

@section('conteudo')	
<table class="table">
	@foreach ($tipodecouros as $t)
	<tr> 
		<td>{{$t->nome_couro}}</td>
		

		<td> 
			<a href="{{action('TipoDeCouroController@remove', $t->id)}}"> 
				<span class="glyphicon glyphicon-trash"></span>
			</a>
		</td>

		<td> 
			<a href="/tipodecouros/busca/{{$t->id}}"> 
				<span class="glyphicon glyphicon-pencil"></span>
			</a>
		</td>




	</tr>
	@endforeach
	</table>
@stop

