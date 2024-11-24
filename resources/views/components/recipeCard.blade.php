<div class="container d-flex flex-column align-items-center gap-4">

    @foreach ($recipe as $item)
    <div class="card d-flex flex-row" style="width: 70rem; border-radius: 10px">
        <img src="{{ asset('images/'.$item->recipe_photo) }}" class="card-img-top p-1" alt="..." style="border-radius: 10px; height: 250px; width: 750px;">
        <div class="card-body">
            <h5 style="color: grey">{{$item->upload_date}}</h5>
            <h5 class="card-title fs-4">{{$item->recipe_name }}</h5>
            <h5 class="fs-5 fw-bold">by: {{$item->author->author_name}}</h5>
            <p class="card-text">{{substr($item->recipe_desc, 0, 150)}}...</p>
            <a href="{{ route('recipeDetailPage', $item->id) }}" class="btn btn-primary fw-semibold" style="background-color: #bee3ba; color:black; border-color:transparent">Read more</a>
        </div>
    </div>
    @endforeach
</div>