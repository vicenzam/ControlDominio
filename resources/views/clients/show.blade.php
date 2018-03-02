@extends('layout')

@section('title')
	Mostrar Cliente
@endsection

@section('encabezado')
	<div class="encabezado">
	 <div class="container">
	 	<div class="row">
	 		<div class="col-6">
	 			<h1 class="display-4">Clientes</h1>	 			
	 		</div>
	 		<div class="col-6 d-flex justify-content-end align-items-center">
	 			<div class="encabezado__right">
	 	  			<a class="btn btn-primary btn-lg" href="{{ route('clientes.create') }}" role="button">Nuevo Cliente</a>	 			
	 			</div>
	 		</div>
	 		<hr class="my-4">	 	
	 	</div>
	 	
	 </div>
	</div>
@endsection

@section('content')
	<h2>
		{{ $client->nombre }}
		<a class="btn btn-primary" href="{{ route('clientes.edit', $client->id) }}">Editar</a>
	</h2>
	<p>{{ $client->ruc }}</p>
	<p>{{ $client->email }}</p>
	<p>{{ $client->telefono }}</p>	
		


@endsection


