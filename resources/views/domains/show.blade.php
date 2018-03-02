@extends('layout')

@section('title')
	Mostrar Domino
@endsection

@section('encabezado')
	<div class="encabezado">
	 <div class="container">
	 	<div class="row">
	 		<div class="col-6">
	 			<h1 class="display-4">Dominios</h1> 			
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
	<h2>
		{{ $domain->nombre }}
		<a class="btn btn-primary" href="{{ route('dominios.edit', $domain->id) }}">Editar</a>
	</h2>
	<p><strong>fecha de Registro</strong></p>
	<p>{{ $domain->registro }}</p>
	<p><strong>fecha de Vencimiento</strong></p>
	<p>{{ $domain->vence }}</p>
	<p><strong>Cliente</strong></p>
	<p>{{ $domain->client->nombre }}</p>
	<p><strong>Proveedor</strong></p>
	<p>{{ $domain->provider->nombre }}</p>
	<p><strong>Estado</strong></p>
	<p>{{ $domain->estado }}</p>
	<p><strong>Observaciones</strong></p>
	<p>{{ $domain->observacion }}</p>	
		


@endsection


