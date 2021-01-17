<link rel="stylesheet" href="{{ asset('main.css') }}">
<div class="card" style="width: 270px;margin: 5px">
    <img class="card-img-top" src="{{ asset('/'. $game->image ?? 'place_holder.png')  }}" alt="Card image cap">
    <div class="card-block">
        <h3 class="card-title">{{ $game->title }}</h3>
        <p class="card-text">{{ $game->title }} is published by {{ $game->publisher }} and developed by {{ $game->developer }}</p>
        <p>
            <a href="{{route('all_games')}}"><button class="btn btn-primary">List Games</button></a>
            <a href="{{route('home')}}"><button class="btn btn-primary">Add More Games</button></a>
        </p>
    </div>
</div>

