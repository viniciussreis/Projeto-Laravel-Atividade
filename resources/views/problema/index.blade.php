@extends('master')
@section('titulo','Lista de Problemas')
@section('corpo')
<a href="/problema/create" class="btn btn-primary btn-sm">Novo Problema</a>
<table class="table table-striped">
<tr>
	<th>Descrição</th>
    <th></th>
</tr>
@foreach($problemas as $problema)
<tr>
	<td>{{$problema->descricao}}</td>
	<td>
		<a href="/problema/{{$problema->id}}" class="btn btn-primary btn-sm">Detalhe</a>
		<a href="/problema/{{$problema->id}}/edit" class="btn btn-primary btn-sm">Editar</a>
	</td>
</tr> 
@endforeach
</table>
@endsection