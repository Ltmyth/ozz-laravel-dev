@if( count($errors) > 0 )
	@foreach($errors->all() as $error)
		<div class="alert alert-danger">
			{{ $error }}
		</div>
	@endforeach
@endif

@if( session('success') > 0 )
	<div class="alert alert-success">
		{{ session('success') }}
	</div>
@endif

@if( session('error') > 0 )
	<div class="alert alert-danger">
		{{ session('error') }}
	</div>
@endif

