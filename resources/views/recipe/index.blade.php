@extends('layouts.app')

@section('content')
	<div class='row'>
		@foreach ($recipes as $r)
			<div class='col-md-6 col-lg-3 my-3'>
				<div class='center recipe-index'>
					<a href="{{ route('show',['recipe'=>$r->id]) }}">
						<img class='recipe-img-index' src="{{ asset('storage/'. $r->image) }}" alt='No Image is Available' width='100%' height='auto' />
					</a>
					<div class='recipe-name-index'>{{ $r->recipeName }}</div>
				</div>
			</div>
		@endforeach
	</div>
@endsection
