<div class="container" style="display: flex; flex-wrap: wrap; gap: 100px; justify-content: center">
  @foreach ($authors as $item)
  <div class="card" style="width: 250px;border-style: none">
    <a href="{{ route('authorDetailPage', ['id'=>$item->id]) }}">
      <img src="{{ asset('images/'.$item->author_photo) }}" class="card-img-top" alt="..." style="border-radius: 50%">
    </a>
      <div class="card-body">
        <h5 class="card-title">{{$item->author_name}}</h5>
        <p class="card-text">{{$item->author_specialist}}</p>
      </div>
    </div>
  @endforeach
</div>