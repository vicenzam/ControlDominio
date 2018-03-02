@extends('layout')

@section('title')
	Editar Dominio
@endsection

@section('encabezado')
	<div class="encabezado">
	 <div class="container">
	 	<div class="row">
	 		<div class="col-6">
	 			<h1 class="display-4">Editar Dominio</h1>
	 		</div>
	 		<div class="col-6 d-flex justify-content-end align-items-center">
	 			<div class="encabezado__right">
	 	  			<a class="btn btn-primary btn-lg" href="{{ route('dominios.create') }}" role="button">Nuevo Dominio</a>	 		
	 			</div>
	 		</div>
	 		<hr class="my-4">	 	
	 	</div>
	 	
	 </div>
	</div>
@endsection

@section('content')
	
	@include('component.error')

	@include('domains.part.formedit')

	{{-- {!! Form::model($domain, ['route' => ['dominios.update', $domain->id], 'method' => 'PUT']) !!}
		@include('domains.part.form')
	{!! Form::close() !!} --}}

@endsection