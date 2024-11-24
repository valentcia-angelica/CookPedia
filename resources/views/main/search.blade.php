@extends('layout.master')

@section('content')
    
    <h1 style="padding: 35px; text-align: center">Result for "{{$searchedName}}"</h1>
    @if ($recipes->isEmpty())
        <h3>No data available</h3>
    @else
        @include('components.recipeCard', ['recipe' => $recipes])
        
    @endif
@endsection