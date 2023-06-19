<?php

namespace App\Http\Controllers;

use App\Models\Game;
use App\Models\Requirements;
use Dotenv\Store\File\Paths;
use Illuminate\Http\Request;

class GameController extends Controller
{
    public function show($id)
    {
        $game = Game::where('id', $id)->first();
        if($game) {
            $game->additional_images = json_decode($game->additional_images, true); 
            return view('game.show', ['game'=>$game]);
        } else {
            return redirect('/');
        }
    }

    public function destroy($id){
        $game = Game::find($id);
        $game->delete();
        return redirect()->back();
    }

    public function store(Request $request){
        function getPaths($images,$name){
            $paths = [];
            if($images){
                foreach($images as $image){
                    $path= $image->store($name.'/additional_images');
                   array_push($paths,$path);
                }
            }
           return $paths;
        }
        $request->validate([
            'name' => 'required',
            'image' => 'required|image',
            'background_image' => 'required|image',
            'description' => 'required',
            'additional_images' => 'required',
            'os' => 'required',
            'gpu' => 'required',
            'cpu' => 'required',
            'ram' => 'required',
            'download_link' => 'required',
        ]);

        $game = Game::create([
            'name' => $request->name,
            'image' => $request->file('image')->store($request->name.'/poster'),
            'background_image' => $request->file('background_image')->store($request->name.'/background_image'),
            'description' => $request->description,
            'download_link' => $request->download_link,
            'additional_images' => json_encode(getPaths($request->file('additional_images'),$request->name)),
        ]);

        Requirements::create([
            'os' => $request->os,
            'gpu' => $request->gpu,
            'cpu' => $request->cpu,
            'ram' => $request->ram,
            'game_id' => $game->id,
        ]);
        return redirect('/');
    }
}
