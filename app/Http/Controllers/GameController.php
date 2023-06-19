<?php

namespace App\Http\Controllers;

use App\Models\Game;
use App\Models\Requirements;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GameController extends Controller
{
    public function show($id)
    {
        $game = Game::where('id', $id)->first();
        if($game) {
            return view('game.show', ['game'=>$game]);
        } else {
            return redirect('/');
        }
    }

    public function destroy($id){
        $game = Game::find($id);
        Storage::deleteDirectory($game->name);
        $game->delete();
        return redirect()->back();
    }

    public function edit($id){
        $game = Game::find($id);
        return view('game.edit',with(['game'=>$game]));
    }

    public function update(Request $request,$id){
        $game = Game::find($id);
        if($request->file('additional_images')){
            Storage::deleteDirectory($game->name.'/additional_images');
            $paths=[];
            foreach($request->file('additional_images') as $image){
                $path= $image->store($game->name.'/additional_images');
                array_push($paths,$path);
            }
            $game->update(['additional_images'=>$paths]);
        }
        if($request->file('image')){
            Storage::deleteDirectory($game->name.'/poster');
            $imagePath= $request->file('image')->store($game->name.'/poster');
            $game->image = $imagePath;
            $game->save();
        }
        if($request->file('background_image')){
            Storage::deleteDirectory($game->name.'/background_image');
            $imagePath= $request->file('background_image')->store($game->name.'/background_image');
            $game->background_image= $imagePath;
            $game->save();
        }
        if($game){
            $game->update($request->except(['os','gpu','cpu','ram','additional_images']));
            Requirements::find($game->requirements->id)->update($request->only(['os','gpu','cpu','ram']));
        }
        return redirect('/');
    }

    public function store(Request $request){
        try{
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
                'additional_images' => getPaths($request->file('additional_images'),$request->name),
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
        catch(\Exception $e){
            return back()->withInput();
        }
    }
}
