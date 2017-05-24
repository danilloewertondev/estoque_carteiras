@extends('layout.principal')

@section('conteudo')

@if (count($errors) > 0)
<div class="alert alert-danger">
	@foreach($errors->all() as $error) 
	<ul> 
		<li>{{$error}}</li>
	</ul>
	@endforeach
</div>
@endif

<h1>Login</h1>

<form action="/login" method="post">

	<input type="hidden" name="_token" value="{{{ csrf_token() }}}" />

	<div class="form-group">
		<label>E-mail</label>
		<input name="email" class="form-control" />
	</div>

	<div class="form-group">
		<label>Senha</label>
		<input type="password" name="password" class="form-control" />
	</div>	
	
	<button type="submit" class="btn 
	btn-primary btn-block">Login</button>
</form>

@stop
