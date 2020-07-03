@extends('master')
@section('titulo','Problema')
@section('corpo')
	<div class="container">
		<h3>Problema</h3>
		<div class="row">
			<div class="col-sm-6">
				<dl>
					<dt>Descrição</dt>
					<dd>{{$problema->descricao}}</dd>
					<dt>Carro</dt>
					<dd>{{$carro->placa}} - {{$carro->modelo}} - {{$carro->ano}} - {{$carro->cor}}</dd>
				</dl>

				<form action="/problema/{{$problema->id}}" method="post" onsubmit="return confirm('Confirma exclusão?')">
					@csrf
					@method('DELETE')
					<input type="submit" value="Excluir" class="btn btn-primary btn-sm">
					<a href="/problema" class="btn btn-primary btn-sm">Voltar</a>
				</form>
			</div>
		</div>
	</div>
@endsection