@extends('master')
@section('titulo','Lista de Clientes')
@section('corpo')
<a href="/cliente/create" class="btn btn-primary btn-sm">Novo Cliente</a>
<table class="table table-striped">
<tr>
	<th>Nome</th>
	<th>CPF</th>
	<th>Telefone</th>
	<th>Endereço</th>
    <th></th>
</tr>
@foreach($clientes as $c)
<tr>
	<td>{{$c->nome}}</td>
	<td>{{$c->cpf}}</td>
	<td>{{$c->telefone}}</td>
    <td>{{$c->endereco}}</td>
	<td>
		<a href="/cliente/{{$c->id}}" class="btn btn-primary btn-sm">Detalhe</a>
		<a href="/cliente/{{$c->id}}/edit" class="btn btn-primary btn-sm">Editar</a>
	</td>
</tr> 
@endforeach
</table>
@endsection