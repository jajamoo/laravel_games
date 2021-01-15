<?php


namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Game;

//created this controller
class GamesController extends Controller
{
    public function index()
    {
        $games = Game::all();
        return view('games.index', ['games' => $games]);
    }

    public function show(Game $game)
    {
        return view('games.show', ['game' => $game]);
    }

    public function create(Request $request)
    {
//        return view('games.create', ['game' => $id]);
    }

    public function store()
    {
        $game = new Game;

        $game->title = request('title');
        $game->publisher = request('publisher');
        $game->releasedate = request('releasedate');
        $game->releasedate = request('developer');
        $game->image = request()->file('image')->store('public/images');
        $game->save();
    }


}
