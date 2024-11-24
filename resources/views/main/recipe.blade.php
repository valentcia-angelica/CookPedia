@extends('layout.master')

@section('content')
<div class="container-fluid">
    <h1 style="padding: 35px; text-align: center">Discover What’s Trending ~ Taste the Best of Today!</h1>
    @include('components.recipeCard')
</div>
<div class="d-flex justify-content-center pt-4" style="">
{{$recipe->links()}}
</div>
@endsection