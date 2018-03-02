@extends('layout')

@section('title')
	Clientes
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
		
		@include('component.info')
	
		<table class="table table-striped">
		  <thead>
		    <tr>
		      <th scope="col">#</th>
		      <th scope="col">Nombre</th>
		      <th scope="col">RUC</th>
		      <th scope="col">Email</th>
		      <th scope="col">Teléfono</th>
		      <th scope="col" colspan="3">&nbsp;</th>
		    </tr>
		  </thead>
		  <tbody>
		  @foreach($clients as $client)
			    <tr>
			      <th scope="row">{{ $client->id }}</th>
			      <td>{{ $client->nombre }}</td>
			      <td>{{ $client->ruc }}</td>
			      <td>{{ $client->email }}</td>
			      <td>{{ $client->telefono }}</td>			      
			      <td>
			      	<a class="btn btn-primary iconotabla" 
			      	href="{{ route('clientes.show', $client->id) }}"><span class="fa fa-eye"></span> Ver</a>
			      </td>	
			      <td>
			      	<a class="btn btn-warning iconotabla" href="{{ route('clientes.edit', $client->id) }}"><span class="fa fa-pencil"></span> Editar</a>
			      </td>
			      <td>
			      	<form action="{{ route('clientes.destroy', $client->id) }}" method="POST">
			      		{{ csrf_field() }}
			      		<input type="hidden" name="_method" value="DELETE">
			      		<button class="btn btn-danger iconotabla"><span class="fa fa-close"></span>Eliminar</button>
			      	</form>
			      	</td>			      
			     		      
			    </tr>
		  @endforeach
		  </tbody>
		</table>

		
		{{ $clients->render() }}
		
	


@endsection


