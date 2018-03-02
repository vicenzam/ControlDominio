@extends('layout')

@section('title')
	Nuevo Dominio
@endsection

@section('encabezado')
	<div class="encabezado">
	 <div class="container">
	 	<div class="row">
	 		<div class="col-6">
	 			<h1 class="display-4">Ingresar Dominio</h1>
	 		</div>
	 		<div class="col-6 d-flex justify-content-end align-items-center">
	 			<div class="encabezado__right">
	 	  			<a class="btn btn-primary btn-lg" href="{{ route('dominios.index') }}" role="button">Listado de Dominios Igresados</a>			
	 			</div>
	 		</div>
	 		<hr class="my-4">	 	
	 	</div>
	 	
	 </div>
	</div>
@endsection

@section('content')
	
	@include('component.error')

	@include('domains.part.formcreate')

	{{-- {!! Form::open(['route' => 'clientes.store']) !!}
		@include('clients.part.form')
	{!! Form::close() !!} --}}	


@endsection