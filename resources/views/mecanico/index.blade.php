@extends('master')
@section('titulo','Lista de Mecânicos')
@section('corpo')
<a href="/mecanico/create" class="btn btn-primary btn-sm">Novo Mecânico</a>
<table class="table table-striped">
<tr>
	<th>Nome</th>
	<th>CPF</th>
    <th></th>
</tr>
@foreach($mecanicos as $m)
<tr>
	<td>{{$m->nome}}</td>
	<td>{{$m->cpf}}</td>
	<td>
		<a href="/mecanico/{{$m->id}}" class="btn btn-primary btn-sm">Detalhe</a>
		<a href="/mecanico/{{$m->id}}/edit" class="btn btn-primary btn-sm">Editar</a>
	</td>
</tr> 
@endforeach
</table>
@endsection