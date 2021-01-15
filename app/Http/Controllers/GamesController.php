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

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string',
            'publisher' => 'required|string',
            'developer' => 'nullable|string',
            'releasedate' => 'required|date',
            'image' => 'required|string',
        ]);

        $game = new Game;

        $game->title = $request->input('title');
        $game->publisher = $request->input('publisher');
        $game->developer = $request->input('developer');
        $game->releasedate = $request->input('releasedate');
        $game->image = $request->file('image')->store('public/images');

        $game->save();
    }

    public function delete($id)
    {
        $game = Game::find($id);
        $game->delete();

        return redirect()->route('all_games');
    }
}
