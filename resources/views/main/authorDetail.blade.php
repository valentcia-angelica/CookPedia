@extends('layout.master')
@section('content')
    <div class="d-flex flex-row p-4 gap-3">
        <img src="{{ asset('images/'.$authorId->author_photo) }}" alt="" style="height: 80px; border-radius: 50%">
        <div class="">
            <h1 class="fs-3">{{$authorId->author_name}}</h1>
            <h3 class="fs-4" style="color: grey">{{$authorId->author_specialist}}</h3>
        </div>
    </div>
    @include('components.recipeCard', ['recipe' => $authorId->recipes])
@endsection