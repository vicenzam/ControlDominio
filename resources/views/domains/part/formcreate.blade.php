<form action="{{ route('dominios.store') }}" method="POST">

	{{ csrf_field() }}	

	<div class="form-group">
		<label for="nombre">Nombre del Dominio</label>
		<input type="text" name="nombre" class="form-control">
	</div>	
	
	<div class="form-group">
		<label for="registro">Registro</label>		
		<input type="date" id="registro" name="registro" class="form-control">
	</div>

	<div class="form-group">
		<label for="vence">Vence</label>
		<input type="date" id="vence" name="vence" class="form-control">
	</div>

	<div class="form-group">
		<label for="client_id">Cliente</label>		
		<select name="client_id" id="client_id" class="custom-select">
			@foreach($clients as $client)				
				<option value="{{ $client->id }}">{{ $client->nombre }}</option>
			@endforeach
		</select>
	</div>

	<div class="form-group">
		<label for="provider_id">Proveedor</label>		
		<select name="provider_id" id="provider_id" class="custom-select">						
			@foreach($providers as $provider)
				<option value="{{ $provider->id }}">{{ $provider->nombre }}</option>
			@endforeach
		</select>
	</div>

	<div class="form-group">
		<label for="account_id">Cuenta</label>		
		<select name="account_id" id="account_id" class="custom-select">						
			@foreach($accounts as $account)
				<option value="{{ $account->id }}">{{ $account->nombre }}</option>
			@endforeach
		</select>
	</div>	

	<div class="form-group">
		<label for="estado">Estado</label>		
		<select name="estado" id="estado" class="custom-select">			
			<option selected value="ACTIVO">ACTIVO</option>			
			<option value="INACTIVO">INACTIVO</option>	
		</select>
	</div>

	<div class="form-group">
		<label for="observacion">Observación</label>
		<textarea name="observacion" id="observacion" cols="30" rows="3">			
		</textarea>
	</div>	

	<div class="form-group">
		<button type="submit" class="btn btn-primary">Guardar Dominio</button>
	</div>

	
</form>