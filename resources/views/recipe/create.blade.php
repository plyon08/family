@extends('layouts.app')

@section('content')

	@include('includes.error')

	<div class='row'>
		<div class='col'>
			<h2>Add Recipe</h2>
				{!! Form::open(['url' => '/recipes','class' => 'needs-validation','files' => true]) !!}
				{!! Form::token() !!}
                <div class="row my-5">
                    <div class='col-12 col-md-6 mb-3'>
                        {!! Form::label('Recipe Name') !!}
                        {!! Form::text('recipeName',null,['placeholder' => 'Enter the name of the recipe','class' => 'form-control']) !!}
                    </div>
                    <div class="col-12 col-md-6 mb-3">
						<label for="tags">Tag</label>
						{!! Form::select('tag', ['Beef' => 'Beef','Chicken' => 'Chicken','Pork' => 'Pork','Ham' => 'Ham','Fish' => 'Fish','Pasta' => 'Pasta','Dessert' => 'Dessert','Sides' => 'Sides'],null, ['placeholder' => 'Please pick a tag...','class' => 'form-control']) !!}
					</div>
                </div>
                <div class="row my-5">
                    <div class="col-12 col-md-6 mb-3">
                        {!! Form::label('Ingredients') !!}
                        {!! Form::textarea('ingredients',null,['placeholder' => 'List the Ingredients here...','class' => 'form-control']) !!}
                    </div>
                    <div class="col-12 col-md-6 mb-3">
						{!! Form::label('Instructions') !!}
                        {!! Form::textarea('instructions',null,['placeholder' => 'List the Instructions here...','class' => 'form-control']) !!}
                    </div>
                </div>
				<div class='row my-5'>
					<div class="col-12 mb-3">
						<label for="image">Image Name</label>
					</div>
					<div class='col-12 mb-3'>
						{!! Form::file('image') !!}
					</div>
				</div>
				<div class='row justify-content-md-start my-5'>
					<div class='col col-md-2 col-lg-1 center'>
						{!! Form::submit('Submit',['class' => 'btn btn-primary']) !!}
                    </div>
                    <div class='col col-md-2 col-lg-1 center'>
                        <a class='btn btn-warning' href='{{ route('index') }}'>Cancel</a>
                    </div>
                </div>
			{!! Form::close() !!}
		</div>
	</div>

@endsection
