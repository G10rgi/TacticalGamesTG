<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Game;
use App\Models\Requirements;
use LDAP\Result;

class GameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $games = Game::factory()->count(5)->create();
        foreach($games as $game) {
            Requirements::factory()->create(['game_id' => $game->id]);
        }
    }
}
