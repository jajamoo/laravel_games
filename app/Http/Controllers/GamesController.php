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

    public function show($id)
    {
        $game = Game::find($id);
        return view('games.show', ['game' => $game]);
    }

    public function start(Request $request)
    {
        return view('games.create');
    }

    public function create(Request $request)
    {
        //        $request->validate([
//            'title' => 'required|string',
//            'publisher' => 'required|string',
//            'developer' => 'nullable|string',
//            'releasedate' => 'required|date',
//            'image' => 'required|string',
//        ]);

        if($request->isMethod('post')){
            $game = new Game;

            $game->title = $request->input('title');
            $game->publisher = $request->input('publisher');
            $game->publisher_id = 3;
            $game->developer = $request->input('developer');
            $game->release_date = $request->input('releasedate');
            $game->image = $request->file('image')->store('/storage/images');

            $game->save();

        }

        return view('games.create');
    }

    public function delete($id)
    {
        $game = Game::find($id);
        $game->delete();

        return redirect()->route('all_games');
    }
}
