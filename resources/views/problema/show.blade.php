@extends('master')
@section('titulo','Problema')
@section('corpo')
<div class="container">
	<div class="panel panel-primary">
		<div class="panel-heading">
			<h3 class="panel-title">Dados do Problema</h3>
		</div>
		<div class="panel-body">
			<div class="row-full">
				<div class="col-sm-0">
				<dl>
					<dt>Descrição do problema</dt>
					<dd>{{$problema->descricao}}</dd>
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
						<tr>
							<td>{{$carro->placa}}</td>
							<td>{{$carro->modelo}}</td>
							<td>{{$carro->ano}}</td>
							<td>{{$carro->cor}}</td>
						</tr>
					</table>

					<div>
						<form action="/problema/{{$problema->id}}" method="post" onsubmit="return confirm('Confirma exclusão?')">
							@csrf
							@method('DELETE')
							<input type="submit" value="Excluir" class="btn btn-primary btn-sm">
							<a href="/problema" class="btn btn-primary btn-sm">Voltar</a>
						</form>
					</div>
					
				</div>
			</div>
		</div>
	</div>
</div>
@endsection