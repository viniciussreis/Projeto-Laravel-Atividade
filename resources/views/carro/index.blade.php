@extends('master')
@section('titulo','Lista de Clientes')
@section('corpo')
<a href="/carro/create" class="btn btn-primary btn-sm">Novo Carro</a>
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
	<td>
		<a href="/carro/{{$carro->id}}" class="btn btn-primary btn-sm">Detalhe</a>
		<a href="/carro/{{$carro->id}}/edit" class="btn btn-primary btn-sm">Editar</a>
	</td>
</tr> 
@endforeach
</table>
@endsection