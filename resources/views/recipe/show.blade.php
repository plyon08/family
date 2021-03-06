@extends('layouts.app')

@section('content')

    <div class='row justify-content-center'>
        <div class='col-12'>
            <h2>{{ $recipe->recipeName }}</h2>
            <p class='my-4'><img class='recipe-img' src="{{ asset('storage/'. $recipe->image) }}" alt='No Image is Available' width='100%' height='auto' /></p>
            <div class='my-4'>
                <h4 class='mt-4'>Ingredients</h4>
                <p>{!! nl2br(e($recipe->ingredients)) !!}</p>
            </div>
            <div class='my-4'>
                <h4 class='mt-4'>Instructions</h4>
                <p>{!! nl2br(e($recipe->instructions)) !!}</p>
            </div>
            <p class='my-4'>Tag: {{ $recipe->tag }}</p>
            <div class='row justify-content-md-start'>
                <div class='col col-md-2 col-lg-1'>
                    <div class='center'><a class='btn btn-primary' href="{{ route('edit',['recipe'=>$recipe->id]) }}">Update</a></div>
                </div>
                <div class='col col-md-2 col-lg-1'>
                    <div class='center'>
                        <form method='POST' action="{{ route('destroy',['recipe'=>$recipe->id]) }}">
                        {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                        <button type='submit' class='btn btn-danger'>Delete</button>
                        </form>
                    </div>
                </div>
                <div class='col col-md-2 col-lg-1'>
                    <div class='center'>
                        <a class='btn btn-warning' href='{{ route('index') }}'>Recipes</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
