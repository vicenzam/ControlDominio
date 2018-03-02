@extends('layout')

@section('title')
	Editar Proveedor
@endsection

@section('encabezado')
	<div class="encabezado">
	 <div class="container">
	 	<div class="row">
	 		<div class="col-6">
	 			<h1 class="display-4">Editar Proveedor</h1>
	 		</div>
	 		<div class="col-6 d-flex justify-content-end align-items-center">
	 			<div class="encabezado__right">
	 	  			<a class="btn btn-primary btn-lg" href="{{ route('proveedores.create') }}" role="button">Nuevo Proveedor</a>	 		
	 			</div>
	 		</div>
	 		<hr class="my-4">	 	
	 	</div>
	 	
	 </div>
	</div>
@endsection

@section('content')
	
	@include('component.error')

	{!! Form::model($provider, ['route' => ['proveedores.update', $provider->id], 'method' => 'PUT']) !!}
		@include('providers.part.form')
	{!! Form::close() !!}

@endsection