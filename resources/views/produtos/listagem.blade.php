@extends('layout.principal')
@extends('layout.menu')

@section('conteudo')
@section('menu')
<div class="container">
	<table class="table">
		@foreach ($produtos as $p)
		<tr> 
			<td>{{$p->cor}}</td>
			<td>{{$p->quantidade}}</td>
			<td>{{$p->referencia->nome_referencia}} </td>
			<td>{{$p->tipodecouro->nome_couro}} </td>

			<td> 
				<a href="{{action('ProdutoController@remove', $p->id)}}"> 
					<span class="glyphicon glyphicon-trash"></span>
				</a>
			</td>

			<td> 
				<a href="/produtos/busca/{{$p->id}}"> 
					<span class="glyphicon glyphicon-pencil"></span>
				</a>
			</td>



		</tr>
		@endforeach
	</table>
</div>
@stop
@stop

