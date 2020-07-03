@extends('master')
@section('titulo','Carro')
@section('corpo')
	<div class="container">
		<h3>Carro</h3>
		<div class="row">
			<div class="col-sm-6">
				<dl>
					<dt>Placa</dt>
					<dd>{{$carro->placa}}</dd>
					<dt>Modelo</dt>
					<dd>{{$carro->modelo}}</dd>
                    <dt>Ano</dt>
					<dd>{{$carro->ano}}</dd>
                    <dt>Cor</dt>
					<dd>{{$carro->cor}}</dd>
					<dt>Cliente</dt>
					<dd>{{$cliente->nome}}</dd>
					<dt>Mecanico</dt>
					<dd>{{$mecanico->nome}}</dd>
				</dl>

				<h3>Problemas</h3>
				@foreach($problemas as $problema)
					<p>{{$problema->descricao}}</p>
				@endforeach

				<form action="/carro/{{$cliente->id}}" method="post" onsubmit="return confirm('Confirma exclusão?')">
					@csrf
					@method('DELETE')
					<input type="submit" value="Excluir" class="btn btn-primary btn-sm">
					<a href="/carro" class="btn btn-primary btn-sm">Voltar</a>
				</form>
			</div>
		</div>
	</div>
@endsection