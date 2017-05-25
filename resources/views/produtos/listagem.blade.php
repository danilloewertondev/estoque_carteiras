@extends('layout.principal')
@extends('layout.menu')

@section('conteudo')
@section('menu')

<div class="container"><div class="margemh1 col-xs-12 col-sm-5 col-md-6"><h3>Carteiras em estoque</h3></div></div>

<div class="container-fluid">
			<div class="col-sm-12 col-md-12  col-lg-12">
			<div class="table-responsive">	
				<table class="table table-striped table-condensed table-hover">
					<tr>
						<th>Cor</th>
						<th>Quantidade</th>
						<th>Referencia</th>
						<th>Couro</th>
						<th>Excluir</th>
						<th>Alterar</th>

					</tr>

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
	</div>
</div>
@stop
@stop

