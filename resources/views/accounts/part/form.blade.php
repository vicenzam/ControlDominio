<div class="form-group">
	{!! Form::label('nombre', 'Nombre o Usuario de la Cuenta') !!}
	{!! Form::text('nombre' , null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
	{!! Form::label('email', 'Email de la cuenta') !!}
	{!! Form::text('email' , null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
	{!! Form::submit('ENVIAR' , ['class' => 'btn btn-primary']) !!}
</div>
