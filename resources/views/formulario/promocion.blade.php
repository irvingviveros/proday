@include('/template/header')
	<div class="body">

		@if ($errors -> any())
			<div class="alert alert-danger">
				@foreach ($errors -> all() as $error)
					<li>{{$error}}</li>
				@endforeach
			</div>
		@endif

		{!! Form::open(['route' => 'proday.store', 'method' => 'POST', 'files' => true]) !!}

		@include('/template/nuevapromo')
		
		<div class="text-center">
			{!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
		</div>

		{!! Form::close() !!}

	</div>
@include('/template/footer')