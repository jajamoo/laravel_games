<?php


namespace App\Http\Controllers;


use App\Events\GameSaved;
use App\GamePublisher;
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
        $request->validate([
            'title' => 'required|string',
            'publisher' => 'required|string',
            'developer' => 'nullable|string',
            'email' => 'required|email|unique:game_publishers,email',
            'releasedate' => 'required|date',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg',
        ]);

        if($request->isMethod('post')){
            $game = new Game;
            $publisher = GamePublisher::find(1);
            $game->title = $request->input('title');
            $game->publisher = $request->input('publisher');
            $game->publisher_id = $publisher->id;
            $game->developer = $request->input('developer');
            $game->release_date = $request->input('releasedate');
            $game->publisher_email = $request->input('email');
            $game->image = $request->file('image')->store('/images');

            $game->save();
            $game->refresh();

            event(new GameSaved($game));
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
