@extends('layout')

@section('title')
	Cuentas
@endsection

@section('encabezado')
	<div class="encabezado">
	 <div class="container">
	 	<div class="row">
	 		<div class="col-6">
	 			<h1 class="display-4">Cuentas</h1>	 			
	 		</div>
	 		<div class="col-6 d-flex justify-content-end align-items-center">
	 			<div class="encabezado__right">
	 	  			<a class="btn btn-primary btn-lg" href="{{ route('cuentas.create') }}" role="button">Nueva Cuenta</a>	 			
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
		      <th scope="col">Email</th>		     
		      <th scope="col" colspan="3">&nbsp;</th>
		    </tr>
		  </thead>
		  <tbody>
		  	@foreach($accounts as $account)
			    <tr>
			      <th scope="row">{{ $account->id }}</th>
			      <td>{{ $account->nombre }}</td>
			      <td>{{ $account->email }}</td>			      		      
			      <td>
			      	<a class="btn btn-primary iconotabla" 
			      	href="{{ route('cuentas.show', $account->id) }}"><span class="fa fa-eye"></span> Ver</a>
			      </td>	
			      <td>
			      	<a class="btn btn-warning iconotabla" href="{{ route('cuentas.edit', $account->id) }}"><span class="fa fa-pencil"></span> Editar</a>
			      </td>
			      <td>
			      	<form action="{{ route('cuentas.destroy', $account->id) }}" method="POST">
			      		{{ csrf_field() }}
			      		<input type="hidden" name="_method" value="DELETE">
			      		<button class="btn btn-danger iconotabla"><span class="fa fa-close"></span>Eliminar</button>
			      	</form>
			      	</td>			      
			     		      
			    </tr>
		    @endforeach
		  </tbody>
		</table>

		
		{{ $accounts->render() }}
		
	


@endsection


