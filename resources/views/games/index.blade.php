@section('content')
    @foreach ($games as $game)
        <ul>
            <li>
                <a href="{{ route('show_game', [$id]) }}">{{ $game->title }}</a>
            <li>
        </ul>
    @endforeach
    <a href="{{route('add_games')}}" class="btn btn-primary">Add Games</a>
@endsection
