@extends('master')
@section('titulo','Editar Cliente')
@section('corpo')
	<div class="container">
		<h3>Cliente</h3>
		<div class="row">
			<div class="col-sm-6">
				<dl>
					<dt>Nome</dt>
					<dd>{{$cliente->nome}}</dd>
					<dt>CPF</dt>
					<dd>{{$cliente->cpf}}</dd>
					<dt>Telefone</dt>
					<dd>{{$cliente->telefone}}</dd>
					<dt>Endereço</dt>
					<dd>{{$cliente->endereco}}</dd>
				</dl>
				
				<h3>Carros</h3>
				@foreach($carros as $carro)
					<p>{{$carro->placa}} - {{$carro->modelo}} - {{$carro->ano}} - {{$carro->cor}}</p>
				@endforeach

				<form action="/cliente/{{$cliente->id}}" method="post" onsubmit="return confirm('Confirma exclusão?')">
					@csrf
					@method('DELETE')
					<input type="submit" value="Excluir" class="btn btn-primary btn-sm">
					<a href="/cliente" class="btn btn-primary btn-sm">Voltar</a>
				</form>
			</div>
		</div>
	</div>
@endsection