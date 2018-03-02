@extends('layout')

@section('title')
	Nuevo Cuenta
@endsection

@section('encabezado')
	<div class="encabezado">
	 <div class="container">
	 	<div class="row">
	 		<div class="col-6">
	 			<h1 class="display-4">Crear Cuenta</h1>
	 		</div>
	 		<div class="col-6 d-flex justify-content-end align-items-center">
	 			<div class="encabezado__right">
	 	  			<a class="btn btn-primary btn-lg" href="{{ route('cuentas.index') }}" role="button">Listado de Cuenta</a>			
	 			</div>
	 		</div>
	 		<hr class="my-4">	 	
	 	</div>
	 	
	 </div>
	</div>
@endsection

@section('content')
	
	@include('component.error')

	{!! Form::open(['route' => 'cuentas.store']) !!}
		@include('accounts.part.form')
	{!! Form::close() !!}	


@endsection