@extends('master')
@section('titulo','Carro')
@section('corpo')
<div class="container">
	<div class="panel panel-primary">
		<div class="panel-heading">
			<h3 class="panel-title">Dados do Carro</h3>
		</div>
		<div class="panel-body">
			<div class="row-full">
				<div class="col-sm-0">
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
					<br>
					<h3>Problemas</h3>
					<table class="table table-striped">
						<tr>
							<th>Descrição do problema</th>
						</tr>
						@foreach($problemas as $problema)
						<tr>
							<td>{{$problema->descricao}}</td>
						</tr>
						@endforeach
					</table>

					<div>
						<form action="/carro/{{$carro->id}}" method="post" onsubmit="return confirm('Confirma exclusão?')">
							@csrf
							@method('DELETE')
							<input type="submit" value="Excluir" class="btn btn-primary btn-sm">
							<a href="/carro" class="btn btn-primary btn-sm">Voltar</a>
						</form>
					</div>
					<br>
					
				</div>
			</div>
		</div>
	</div>
</div>
@endsection