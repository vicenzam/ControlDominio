<div class="form-group">
	{!! Form::label('nombre', 'Nombre del Proveedor') !!}
	{!! Form::text('nombre' , null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
	{!! Form::label('website', 'Website del Proveedor') !!}
	{!! Form::text('website' , null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
	{!! Form::submit('ENVIAR' , ['class' => 'btn btn-primary']) !!}
</div>
