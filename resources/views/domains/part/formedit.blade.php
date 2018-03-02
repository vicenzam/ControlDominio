<form action="{{ route('dominios.update', [ 'domain' => $domain->id]) }}" method="POST">

	{{ csrf_field() }}
	{{ method_field('PUT') }}

	<div class="form-group">
		<label for="nombre">Nombre del Dominio</label>
		<input type="text" name="nombre" class="form-control" value="{{ $domain->nombre }}">
	</div>	
	
	<div class="form-group">
		<label for="registro">Registro</label>
		<input type="date" name="registro" class="form-control" value="{{ $domain->registro->toDateString() }}">
	</div>

	<div class="form-group">
		<label for="vence">Vence</label>
		<input type="date" name="vence" class="form-control" value="{{ $domain->vence->toDateString() }}">
	</div>

	<div class="form-group">
		<label for="client_id">Cliente</label>		
		<select name="client_id" id="client_id" class="custom-select">
			<option selected value="{{ $domain->client_id }}">{{ $domain->client->nombre }}</option>			
			@foreach($clients as $client)
				@if( $domain->client_id != $client->id )
					<option value="{{ $client->id }}">{{ $client->nombre }}</option>
				@endif
			@endforeach
		</select>
	</div>

	<div class="form-group">
		<label for="provider_id">Proveedor</label>		
		<select name="provider_id" id="provider_id" class="custom-select">
			<option selected value="{{ $domain->provider_id }}">{{ $domain->provider->nombre }}</option>			
			@foreach($providers as $provider)
				@if( $domain->provider_id != $provider->id )
					<option value="{{ $provider->id }}">{{ $provider->nombre }}</option>					
				@endif
			@endforeach
		</select>
	</div>

	<div class="form-group">
		<label for="account_id">Cuenta</label>		
		<select name="account_id" id="account_id" class="custom-select">
			<option selected value="{{ $domain->account_id }}">{{ $domain->account->nombre }}</option>			
			@foreach($accounts as $account)
				@if( $domain->account_id != $account->id )
					<option value="{{ $account->id }}">{{ $account->nombre }}</option>					
				@endif
			@endforeach
		</select>
	</div>	

	<div class="form-group">
		<label for="estado">Estado</label>		
		<select name="estado" id="estado" class="custom-select">
			@if($domain->estado == 'ACTIVO')
				<option selected value="{{ $domain->estado }}">{{ $domain->estado }}</option>			
				<option value="INACTIVO">INACTIVO</option>
			@else
				<option selected value="{{ $domain->estado }}">{{ $domain->estado }}</option>
				<option value="ACTIVO">ACTIVO</option>
			@endif
		</select>
	</div>

	<div class="form-group">
		<label for="observacion">Observación</label>
		<textarea name="observacion" id="observacion" cols="30" rows="3">
			{{ $domain->observacion }}
		</textarea>
	</div>	

	<div class="form-group">
		<button type="submit" class="btn btn-primary">Editar Dominio</button>
	</div>

	
</form>