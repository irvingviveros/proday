 	

 	<div class="etiqueta-default etiqueta-agregarPromo" style="margin-top: 25px;">
 		<span class="etiqueta-texto">AÑADIR PROMOCIÓN</span>
 	</div>
	
	{{-- NOMBRE ESTABLECIMIENTO --}}
	<div class="form-group">
		<div class="container col-sm-5 mt-2 pt-4">
			<select class="btn border form-control " name="id_est1">
				<option selected disabled>Nombre del establecimiento</option>
					@foreach ($establecimiento as $establecimientos)
        				<option value="{{$establecimientos -> id_est}}">{{$establecimientos -> nombre_est}}</option>
        			@endforeach
			</select>
		</div>
	</div>

	{{-- BOTÓN NUEVO ESTABLECIMIENTO --}}
	<div class="form-group">
		<div class="container col-sm-5 d-flex justify-content-end pt-3 pb-3">
			<span style="font-size: 1rem" class="pr-2 font-weight-bold">¿No encuentras el establecimiento?</span>
			<a href="{{url('/nuevoest/create')}}">
				{!! Form::button('Nuevo establecimiento', ['class' => 'btn btn-outline-info btn-sm']); !!}
			</a>
		</div>
	</div>

	<div class="container form-group col-md-5">
		{!! Form::text('titulo_p', null, ['class' => 'form-control', 'placeholder' => 'Encabezado de la promoción']); !!}
	</div>

	{{-- DÍAS --}}
	<div class="container form-group col-sm-5">
		{!! Form::label('diapromo', 'Día de la promoción', ['class' => 'font-weight-bold']) !!}
		<div class="container pt-2 border" id="diapromo">
			<div class="row">
				<div class="col">
					<div class="row p-1">
						<div class="form-check">
							{!! Form::checkbox('id_d1[]', '1', null,  ['class' => 'form-check-input'], ['id' => 'lunes']) !!}
							{!! Form::label('lunes', 'Lunes') !!}
						</div>
					</div>
					<div class="row p-1">
						<div class="form-check">
							{!! Form::checkbox('id_d1[]', '2', null,  ['class' => 'form-check-input'], ['id' => 'martes']) !!}
							{!! Form::label('martes', 'Martes') !!}
						</div>
					</div>
				</div>
				<div class="col">
					<div class="row p-1">
						<div class="form-check">
							{!! Form::checkbox('id_d1[]', '3', null,  ['class' => 'form-check-input'], ['id' => 'miercoles']) !!}
							{!! Form::label('miercoles', 'Miércoles') !!}
						</div>
					</div>
					<div class="row p-1">
						<div class="form-check">
							{!! Form::checkbox('id_d1[]', '4', null,  ['class' => 'form-check-input'], ['id' => 'jueves']) !!}
							{!! Form::label('jueves', 'Jueves') !!}
						</div>
					</div>
				</div>
				<div class="col">
					<div class="row p-1">
						<div class="form-check">
							{!! Form::checkbox('id_d1[]', '5', null,  ['class' => 'form-check-input'], ['id' => 'viernes']) !!}
							{!! Form::label('viernes', 'Viernes') !!}
						</div>
					</div>
					<div class="row p-1">
						<div class="form-check">
							{!! Form::checkbox('id_d1[]', '6', null,  ['class' => 'form-check-input'], ['id' => 'sabado']) !!}
							{!! Form::label('sabado', 'Sábado') !!}
						</div>              
					</div>
				</div>
				<div class="col">
					<div class="row p-1">
						<div class="form-check">
							{!! Form::checkbox('id_d1[]', '7', null,  ['class' => 'form-check-input'], ['id' => 'domingo']) !!}
							{!! Form::label('domingo', 'Domingo') !!}
						</div>              
					</div>
					<div class="row p-1">
						<div class="form-check">
							{!! Form::checkbox('id_d1[]', '8', null,  ['class' => 'form-check-input'], ['id' => 'diario']) !!}
							{!! Form::label('diario', 'Diario') !!} 
						</div>              
					</div>
				</div>
			</div>
		</div>
	</div>

	{{-- PROMOCIÓN CUMPLEAÑOS --}}
	<div class="container form-group col-md-5">
		{!! Form::label('promocumple', '¿Es promoción para cumpleaños?', ['class' => 'font-weight-bold']) !!}
		<br>
		<div class="container pt-2 border" id="promocumple">
			<div class="text-center">
				{!! Form::label('si', 'Si') !!}
				{!! Form::radio('birthday_p', '1', null,  ['class' => 'ml-1 mr-1'], ['id' => 'si']) !!}
				{!! Form::label('no', 'No') !!}
				{!! Form::radio('birthday_p', '0', true, ['class' => 'ml-1 mr-1'], ['id' => 'no']) !!}
			</div>
		</div>
	</div>

	{{-- IMÁGEN --}}
    <div class="container form-group col-md-5">
    	{!! Form::label('imagen_p', 'Imágen para mostrar', ['class' => 'font-weight-bold']) !!}
    	<br>
	    	<div class="container pt-2 pb-2 border">
	    	{!! Form::file('imagen_p') !!}
    	</div>
    </div>