@extends('layout.master')

@section('content')
    {{-- main banner --}}
    <div class="main-banner" style="background-image: url(/images/main-banner.jpg); background-size: cover; background-position: center; height: 650px; display: flex; justify-content: center; align-items: center; opacity: 0.95; position: relative">
        <h1 style="text-align: center; color: white; font-size: 75px; margin: 0;">Let's Make Your Own Dish</h1>
    </div>    

    {{-- recipe card --}}
    <div class="container-fluid d-flex flex-column align-items-center justify-content-center">
        <h1 style="padding: 50px">Find tasty menu to eat tonight!</h1>
        @include('components.recipeCard')
    </div>
@endsection