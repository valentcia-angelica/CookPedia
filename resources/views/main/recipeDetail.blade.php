@extends('layout.master')

@section('content')
    <div class="container-fluid d-flex flex-column align-items-center justify-content-center">
        <img src="{{ asset('images/'.$recipe->recipe_photo) }}" alt="" style="width: 50%; height: auto; border-radius: 10px; margin: 50px 0">
        <h1>{{$recipe->recipe_name}}</h1>
        <h3 class="fw-semibold fs-5 p-2" style="color: grey"> {{$recipe->upload_date}} | by: {{$recipe->author->author_name}}</h3>
        <p>
            {{$recipe->recipe_desc}}
        </p>
    </div>
@endsection