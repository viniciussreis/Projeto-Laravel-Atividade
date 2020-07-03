@extends('master')
@section('titulo','Cadatrar Problema')
@section('corpo')
	<div class="container">
		<h3>Novo Problema</h3>
		<div class="row">
			<div class="col-sm-6">
				<form action="/problema" method="post">
					@csrf   <!-- token de segurança -->
					<div class="form-group">
						<label for="descricao">Descrição</label>
						<input type="text" name="descricao" id="descricao" class="form-control" value="{{old('descricao')}}"/>
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

		    		<input type="submit" value="Criar" class="btn btn-primary btn-sm"/>
		    		<a href="/problema" class="btn btn-primary btn-sm">Voltar</a>
				</form>
			</div>
		</div>
	</div>
@endsection