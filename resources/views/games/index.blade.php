@section('content')
    <ul>
        @foreach ($games ?? '' as $game)
            <li>
                <a href="{{ route('show_game', [$id]) }}">{{ $game->title }}</a>
            <li>
        @endforeach
    </ul>
    <a href="{{route('add_games')}}" class="btn btn-primary">Add Games</a>
@endsection
