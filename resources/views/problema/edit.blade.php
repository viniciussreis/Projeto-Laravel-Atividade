@extends('master')
@section('titulo','Editar Problema')
@section('corpo')
	<div class="container">
		<h3>Editar Problema</h3>
		<div class="row">
			<div class="col-sm-6">
				<form action="/problema/{{$problema->id}}" method="post">
					@csrf  <!-- token de segurança -->
					@method('PUT') <!-- para acionar a função update do controller -->
					<div class="form-group">
						<label for="descricao">Descrição</label>
						<input type="text" name="descricao" id="descricao" class="form-control" value="{{empty(old('descricao')) ? $problema->descricao : old('descricao')}}"/>
						@if($errors->has('descricao'))
							<p class="text-danger">{{$errors->first('descricao')}}</p>
						@endif	
					</div>

                    <div lass="form-group">
						<label for="carro_id">Carro</label>
						<select name="carro_id" id="carro_id" class="form-control">
							@foreach($carros as $carro)
								<option value="{{$carro->id}}">{{$carro->placa}} - {{$carro->modelo}} - {{$carro->ano}} - {{$carro->cor}}</option>
							@endforeach
						</select>
					</div>

					<input type="submit" value="Alterar" class="btn btn-primary btn-sm"/>
		    		<a href="/funcionario" class="btn btn-primary btn-sm">Voltar</a>
				</form>
			</div>
		</div>
	</div>
@endsection