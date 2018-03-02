<div class="form-group">
	{!! Form::label('nombre', 'Nombre del Cliente') !!}
	{!! Form::text('nombre' , null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
	{!! Form::label('ruc', 'RUC del Cliente') !!}
	{!! Form::text('ruc' , null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
	{!! Form::label('email', 'Email') !!}
	{!! Form::text('email' , null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
	{!! Form::label('telefono', 'Teléfono') !!}
	{!! Form::text('telefono' , null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
	{!! Form::submit('ENVIAR' , ['class' => 'btn btn-primary']) !!}
</div>
