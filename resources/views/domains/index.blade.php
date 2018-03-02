@extends('layout')

@section('title')
	Dominios
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
		
		@include('component.info')
		
		@php
			$fechaDosMeses = $now->addMonths(2);			
		@endphp
		
		<table class="table table-striped">
		  <thead>
		    <tr>
		      <th scope="col">#</th>
		      <th scope="col">Dominio</th>
		      <th scope="col">Registro</th>
		      <th scope="col">Vence</th>
		      {{-- <th scope="col">Cliente</th> --}}
		      <th scope="col">Proveedor</th>
		      <th scope="col">Cuenta</th>
		      <th scope="col">Estado</th>
		      {{-- <th scope="col">Observación</th> --}}
		      <th scope="col">&nbsp;</th>
		    </tr>
		  </thead>
		  <tbody>


		  	@foreach($domains as $domain)
			    <tr>
			      <th scope="row">{{ $domain->id }}</th>
			      <td>{{ $domain->nombre }}</td>
			      <td>{{ $domain->registro->format('d-m-Y') }}</td>
			      <td>
			      	@if( $domain->vence < $fechaDosMeses)
			      		<span class="dominio_caduca">
			      			{{ $domain->vence->format('d-m-Y') }}
			      		</span>			      	
			      	@else
						{{ $domain->vence->format('d-m-Y') }}
			      	@endif
			      </td>
			      {{-- <td>{{ $domain->client->nombre }}</td> --}}
			      <td>{{ $domain->provider->nombre }}</td>			      
			      <td>{{ $domain->account->nombre }}</td>			      
			      <td>
			      	@if( $domain->estado == 'ACTIVO')
			      		<span class="dominio_activo"></span>
			      	@else
						<span class="dominio_inactivo"></span>
			      	@endif
			      </td>
			      {{-- <td>{{ $domain->observacion }}</td> --}}			      
			      <td class="btnacciones">
			      	<div class="btnacciones__item">
			      		<a class="btn btn-primary iconotabla" href="{{ route('dominios.show', $domain->id) }}"><span class="fa fa-eye"></span></a>
			      	</div>
					
					<div class="btnacciones__item">
						<a class="btn btn-warning iconotabla" href="{{ route('dominios.edit', $domain->id) }}"><span class="fa fa-pencil"></span></a>
					</div>	

					<div class="btnacciones__item">
						<form action="{{ route('dominios.destroy', $domain->id) }}" method="POST">
				      		{{ csrf_field() }}
				      		<input type="hidden" name="_method" value="DELETE">
				      		<button class="btn btn-danger iconotabla"><span class="fa fa-close"></span></button>
				      	</form>
					</div>		
			      </td>				     	      
			     		      
			    </tr>
		    @endforeach
		  </tbody>
		</table>

		
		{{ $domains->render() }}
		
	


@endsection


