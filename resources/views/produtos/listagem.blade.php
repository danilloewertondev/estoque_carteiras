@extends('layout.principal')
@extends('layout.menu')

@section('conteudo')
@section('menu')


<style type="text/css">
	.center2{margin-left: 43%; text-align: center;}
	#corGliphicons{ color: #29676E;}

</style>
<div class="container"><div class="margemh1 col-xs-12 col-sm-5 col-md-6"><h3>Carteiras em estoque</h3></div></div>

<div class="container-fluid">
			<div class="col-sm-12 col-md-12  col-lg-12">
			<div class="table-responsive">	
				<table class="table table-striped table-condensed table-hover">
					<tr>
						<th class="center2">Cor</th>
						<th class="center2">Quantidade</th>
						<th class="center2">Referencia</th>
						<th class="center2">Couro</th>
						<th class="center2">Vendas do dia</th>
						<th class="center2">Alterar</th>
						<th class="center2">Excluir</th>
						

					</tr>

					@foreach ($produtos as $p)
					<tr> 
						<td class="center2">{{$p->cor}}</td>
						<td class="center2">{{$p->quantidade}}</td>
						<td class="center2">{{$p->referencia->nome_referencia}} </td>
						<td class="center2">{{$p->tipodecouro->nome_couro}} </td>

						<td> 
							<a href="/produtos/buscaParaVenda/{{$p->id}}"> 
								<span class="glyphicon glyphicon-usd center2" id="corGliphicons"></span>
							</a>
						</td>

						<td> 
							<a href="/produtos/busca/{{$p->id}}"> 
								<span  class="glyphicon glyphicon-pencil center2" id="corGliphicons"></span>
							</a>
						</td>



						<td> 
							<a href="{{action('ProdutoController@remove', $p->id)}}"> 
								<span class="glyphicon glyphicon-trash center2" id="corGliphicons"></span>
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

