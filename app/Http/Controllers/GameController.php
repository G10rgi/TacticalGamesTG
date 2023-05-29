<?php

namespace App\Http\Controllers;

use App\Models\Game;

class GameController extends Controller
{
    public function show($name)
    {
        $game = Game::where('name', $name)->first();
        if($game) {
            $game->additional_images = json_decode($game->additional_images, true);
            return view('game.show', ['game'=>$game]);
        } else {
            return redirect('/');
        }
    }
}
