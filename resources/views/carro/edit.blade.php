@extends('master')
@section('titulo','Editar Carro')
@section('corpo')
	<div class="container">
		<h3>Editar Carro</h3>
		<div class="row">
			<div class="col-sm-6">
				<form action="/carro/{{$carro->id}}" method="post">
					@csrf  <!-- token de segurança -->
					@method('PUT') <!-- para acionar a função update do controller -->
					<div class="form-group">
						<label for="placa">Placa</label>
						<input type="text" name="placa" id="placa" class="form-control" value="{{empty(old('placa')) ? $carro->placa : old('placa')}}"/>
						@if($errors->has('placa'))
							<p class="text-danger">{{$errors->first('placa')}}</p>
						@endif	
					</div>
					
					<div class="form-group">
						<label for="modelo">Modelo</label>
						<input type="text" name="modelo" id="modelo" class="form-control" value="{{empty(old('modelo')) ? $carro->modelo : old('modelo')}}"/>
						@if($errors->has('cpf'))
							<p class="text-danger">{{$errors->first('cpf')}}</p>
						@endif
					</div>
					
					<div class="form-group">
						<label for="ano">Ano</label>
						<input type="text" name="ano" id="ano" class="form-control" value="{{empty(old('ano')) ? $carro->ano : old('ano')}}"/>
						@if($errors->has('ano'))
							<p class="text-danger">{{$errors->first('ano')}}</p>
						@endif
					</div>					
					
					<div class="form-group">
						<label for="cor">Cor</label>
						<input type="text" name="cor" id="cor" class="form-control" value="{{empty(old('cor')) ? $carro->cor : old('cor')}}"/>
						@if($errors->has('cor'))
							<p class="text-danger">{{$errors->first('cor')}}</p>
						@endif
					</div>

                    <div class="form-group">
						<label for="cliente_id">Cliente</label>
						<select name="cliente_id" id="cliente_id" class="form-control">
							@foreach($clientes as $cliente)
								<option value="{{$cliente->id}}">{{$cliente->nome}}</option>
							@endforeach
						</select>
					</div>

                    <div class="form-group">
						<label for="mecanico_id">Mecânico</label>
						<select name="mecanico_id" id="mecanico_id" class="form-control">
							@foreach($mecanicos as $mecanico)
								<option value="{{$mecanico->id}}">{{$mecanico->nome}}</option>
							@endforeach
						</select>
					</div>
		    		
					<input type="submit" value="Alterar" class="btn btn-primary btn-sm"/>
		    		<a href="/carro" class="btn btn-primary btn-sm">Voltar</a>
				</form>
			</div>
		</div>
	</div>
@endsection