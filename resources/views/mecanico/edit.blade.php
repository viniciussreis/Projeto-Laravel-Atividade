@extends('master')
@section('titulo','Editar Mecânico')
@section('corpo')
	<div class="container">
		<h3>Editar Mecânico</h3>
		<div class="row">
			<div class="col-sm-6">
				<form action="/mecanico/{{$mecanico->id}}" method="post">
					@csrf  <!-- token de segurança -->
					@method('PUT')
					<div class="form-group">
						<label for="nome">Nome</label>
						<input type="text" name="nome" id="nome" class="form-control" value="{{empty(old('nome')) ? $mecanico->nome : old('nome')}}"/>
						@if($errors->has('nome'))
						    <p class="text-danger">{{$errors->first('nome')}}</p>
						@endif	
					</div>
					
					<div class="form-group">
						<label for="cpf">CPF</label>
						<input type="text" name="cpf" id="cpf" class="form-control" value="{{empty(old('cpf')) ? $mecanico->cpf : old('cpf')}}"/>
						@if($errors->has('cpf'))
						    <p class="text-danger">{{$errors->first('cpf')}}</p>
						@endif
					</div>
		    		
					<input type="submit" value="Alterar" class="btn btn-primary btn-sm"/>
		    		<a href="/mecanico" class="btn btn-primary btn-sm">Voltar</a>
				</form>
			</div>
		</div>
	</div>
@endsection