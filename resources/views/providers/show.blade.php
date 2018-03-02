@extends('layout')

@section('title')
	Mostrar Proveedor
@endsection

@section('encabezado')
	<div class="encabezado">
	 <div class="container">
	 	<div class="row">
	 		<div class="col-6">
	 			<h1 class="display-4">Proveedores</h1>	 			
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
	<h2>
		{{ $provider->nombre }}
		<a class="btn btn-primary" href="{{ route('proveedores.edit', $provider->id) }}">Editar</a>
	</h2>
	<p>{{ $provider->website }}</p>
		
		


@endsection


