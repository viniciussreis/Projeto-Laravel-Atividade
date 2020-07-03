@extends('master')
@section('titulo','Cadatrar Mecânico')
@section('corpo')
	<div class="container">
		<h3>Novo Mecânico</h3>
		<div class="row">
			<div class="col-sm-6">
				<form action="/mecanico" method="post">
					@csrf   <!-- token de segurança -->
					<div class="form-group">
						<label for="nome">Nome</label>
						<input type="text" name="nome" id="nome" class="form-control" value="{{old('nome')}}"/>
						@if($errors->has('nome'))
						    <p class="text-danger">{{$errors->first('nome')}}</p>
						@endif
					</div>
					
                    <div>
						<label for="cpf">CPF</label>
						<input type="cpf" name="cpf" id="cpf" class="form-control" value="{{old('cpf')}}"/>
						@if($errors->has('cpf'))
						    <p class="text-danger">{{$errors->first('cpf')}}</p>
						@endif
					</div>
                    
		    		<input type="submit" value="Criar" class="btn btn-primary btn-sm"/>
		    		<a href="/mecanico" class="btn btn-primary btn-sm">Voltar</a>
				</form>
			</div>
		</div>
	</div>
@endsection