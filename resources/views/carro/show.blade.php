@extends('master')
@section('titulo','Carro')
@section('corpo')
	<div class="container">
		<h3>Carro</h3>
		<div class="row">
			<div class="col-sm-6">
				<dl>
					<dt>Placa</dt>
					<dd>{{$carro->placa}}</dd>
					<dt>Modelo</dt>
					<dd>{{$carro->modelo}}</dd>
                    <dt>Ano</dt>
					<dd>{{$carro->ano}}</dd>
                    <dt>Cor</dt>
					<dd>{{$carro->cor}}</dd>
				</dl>
			</div>
		</div>
	</div>
@endsection