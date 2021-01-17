@extends('welcome')

@section('create-content')
    <h2 class="flex-center position-ref">Add a game</h2>

    <div class="flex-center position-ref">
        <!-- Wrote this file -->
        <form method="post" action="{{route('add_games')}}" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="form-group row">
                <label for="titleid" class="col-sm-3 col-form-label">Game Title</label>
                <div class="col-sm-9">
                    <input name="title" type="text" class="form-control" id="titleid" placeholder="Game Title">
                </div>
            </div>
            <div class="form-group row">
                <label for="publisherid" class="col-sm-3 col-form-label">Game Publisher</label>
                <div class="col-sm-9">
                    <input name="publisher" type="text" class="form-control" id="publisherid"
                           placeholder="Game Publisher">
                </div>
            </div>
            <div class="form-group row">
                <label for="developerid" class="col-sm-3 col-form-label">Game Developer</label>
                <div class="col-sm-9">
                    <input name="developer" type="text" class="form-control" id="developerid"
                           placeholder="Game Developer">
                </div>
            </div>
            <div class="form-group row">
                <label for="releasedateid" class="col-sm-3 col-form-label">Release Date</label>
                <div class="col-sm-9">
                    <input name="releasedate" type="date" class="form-control" id="releasedateid"
                           placeholder="Release Date">
                </div>
            </div>
            <div class="form-group row">
                <label for="gameimageid" class="col-sm-3 col-form-label">Game Image</label>
                <div class="col-sm-9">
                    <input name="image" type="file" id="gameimageid" class="custom-file-input" style="margin-top: 8px; margin-bottom: 8px">
                    <span style="margin-left: 15px; width: 480px;" class="custom-file-control"></span>
                </div>
                <div class="offset-sm-3 col-sm-9">
                    <button type="submit" class="btn btn-primary">Submit Game</button>
                </div>
            </div>
        </form>
        <a href="{{route('all_games')}}" class="btn btn-primary">List Games</a>

    </div>

@endsection
