<head>
    <title> Adding Games! </title>
</head>
<ul class="list-group">
    @foreach ($games as $game)
        <li class="list-group-item">
            <a href="{{ route('show_game', [$game]) }}">{{ $game->title }}</a>
        <li>
    @endforeach
</ul>
<a href="{{route('add_games')}}"><button class="btn btn-primary">Add Games</button></a>
<a href="{{route('all_games')}}"><button class="btn btn-primary">List Games</button></a>


