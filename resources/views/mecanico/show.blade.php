@extends('master')
@section('titulo','Editar Mecânico')
@section('corpo')
	<div class="container">
		<h3>Mecânico</h3>
		<div class="row">
			<div class="col-sm-6">
				<dl>
					<dt>Nome</dt>
					<dd>{{$mecanico->nome}}</dd>
					<dt>CPF</dt>
					<dd>{{$mecanico->cpf}}</dd>
				</dl>
				
				<h3>Carros</h3>
				@foreach($carros as $carro)
					<p>{{$carro->placa}} - {{$carro->modelo}} - {{$carro->ano}} - {{$carro->cor}}</p>
				@endforeach

				<form action="/mecanico/{{$mecanico->id}}" method="post" onsubmit="return confirm('Confirma exclusão?')">
					@csrf
					@method('DELETE')
					<input type="submit" value="Excluir" class="btn btn-primary btn-sm">
					<a href="/mecanico" class="btn btn-primary btn-sm">Voltar</a>
				</form>
			</div>
		</div>
	</div>
@endsection