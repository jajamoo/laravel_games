<link rel="stylesheet" href="{{ asset('main.css') }}">
<h3>The Following Games Info Has been Saved to the DB</h3>

<div class="card" id="img-card-id">
    <img class="card-img-top" src="{{ asset('/'. $game->image ?? 'images/place_holder.png')  }}" alt="Card image cap">
    <div class="card-block">
        <h3 class="card-title">{{ $game->title }}</h3>
        <p class="card-text">{{ $game->title }} is published by {{ $game->publisher }} and developed by {{ $game->developer }}</p>
    </div>
</div>
