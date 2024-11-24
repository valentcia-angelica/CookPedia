@extends('layout.master')
@section('content')
    <h1 style="padding: 35px; text-align: center">Discover Our {{$categoryId->category_name}}'s Recipes!</h1>
    @include('components.recipeCard', ['recipe' => $categoryId->recipes])
@endsection