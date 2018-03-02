@extends('layout')

@section('title')
	Editar Cliente
@endsection

@section('encabezado')
	<div class="encabezado">
	 <div class="container">
	 	<div class="row">
	 		<div class="col-6">
	 			<h1 class="display-4">Editar Cliente</h1>
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
	
	@include('component.error')

	{!! Form::model($client, ['route' => ['clientes.update', $client->id], 'method' => 'PUT']) !!}
		@include('clients.part.form')
	{!! Form::close() !!}

@endsection