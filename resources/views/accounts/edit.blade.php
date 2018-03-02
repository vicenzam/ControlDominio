@extends('layout')

@section('title')
	Editar Cuenta
@endsection

@section('encabezado')
	<div class="encabezado">
	 <div class="container">
	 	<div class="row">
	 		<div class="col-6">
	 			<h1 class="display-4">Editar Cuenta</h1>
	 		</div>
	 		<div class="col-6 d-flex justify-content-end align-items-center">
	 			<div class="encabezado__right">
	 	  			<a class="btn btn-primary btn-lg" href="{{ route('cuentas.create') }}" role="button">Nuevo Cuenta</a>	 		
	 			</div>
	 		</div>
	 		<hr class="my-4">	 	
	 	</div>
	 	
	 </div>
	</div>
@endsection

@section('content')
	
	@include('component.error')

	{!! Form::model($account, ['route' => ['cuentas.update', $account->id], 'method' => 'PUT']) !!}
		@include('accounts.part.form')
	{!! Form::close() !!}

@endsection