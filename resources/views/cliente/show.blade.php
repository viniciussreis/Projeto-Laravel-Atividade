@extends('master')
@section('titulo','Editar Cliente')
@section('corpo')
<div class="container">
	<div class="panel panel-primary">
		<div class="panel-heading">
			<h3 class="panel-title">Dados do Cliente</h3>
		</div>
		<div class="panel-body">
			<div class="row-full">
				<div class="col-sm-0">
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
					<br>
					<h3>Carros</h3>
					<table class="table table-striped">
						<tr>
							<th>Placa</th>
							<th>Modelo</th>
							<th>Ano</th>
							<th>Cor</th>
							<th></th>
						</tr>
						@foreach($carros as $carro)
						<tr>
							<td>{{$carro->placa}}</td>
							<td>{{$carro->modelo}}</td>
							<td>{{$carro->ano}}</td>
							<td>{{$carro->cor}}</td>
						</tr>
						@endforeach
					</table>

					<div>
						<form action="/cliente/{{$cliente->id}}" method="post" onsubmit="return confirm('Confirma exclusão?')">
							@csrf
							@method('DELETE')
							<input type="submit" value="Excluir" class="btn btn-primary btn-sm">
							<a href="/cliente" class="btn btn-primary btn-sm">Voltar</a>
						</form>
					</div>
					
				</div>
			</div>
		</div>
	</div>
</div>
@endsection