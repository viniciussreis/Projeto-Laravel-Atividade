@extends('master')
@section('titulo','Editar Cliente')
@section('corpo')
	<div class="container">
		<h3>Editar Cliente</h3>
		<div class="row">
			<div class="col-sm-6">
				<form action="/cliente/{{$cliente->id}}" method="post">
					@csrf  <!-- token de segurança -->
					@method('PUT') <!-- para acionar a função update do controller -->
					<div class="form-group">
						<label for="nome">Nome</label>
						<input type="text" name="nome" id="nome" class="form-control" value="{{empty(old('nome')) ? $cliente->nome : old('nome')}}"/>
						@if($errors->has('nome'))
							<p class="text-danger">{{$errors->first('nome')}}</p>
						@endif	
					</div>
					
					<div class="form-group">
						<label for="cpf">CPF</label>
						<input type="text" name="cpf" id="cpf" class="form-control" value="{{empty(old('cpf')) ? $cliente->cpf : old('cpf')}}"/>
						@if($errors->has('cpf'))
							<p class="text-danger">{{$errors->first('cpf')}}</p>
						@endif
					</div>
					
					<div class="form-group">
						<label for="telefone">Telefone</label>
						<input type="text" name="telefone" id="telefone" class="form-control" value="{{empty(old('telefone')) ? $cliente->telefone : old('telefone')}}"/>
						@if($errors->has('telefone'))
							<p class="text-danger">{{$errors->first('telefone')}}</p>
						@endif
					</div>					
					
					<div class="form-group">
						<label for="endereco">Endereco</label>
						<input type="text" name="endereco" id="endereco" class="form-control" value="{{empty(old('endereco')) ? $cliente->endereco : old('endereco')}}"/>
						@if($errors->has('endereco'))
							<p class="text-danger">{{$errors->first('endereco')}}</p>
						@endif
					</div>
		    		
					<input type="submit" value="Alterar" class="btn btn-primary btn-sm"/>
		    		<a href="/funcionario" class="btn btn-primary btn-sm">Voltar</a>
				</form>
			</div>
		</div>
	</div>
@endsection