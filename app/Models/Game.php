<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    use HasFactory;
    protected $guarded = [];

    protected $casts = [
        'additional_images' => 'array'
    ];
    
    public function requirements()
    {
        return $this->hasOne(Requirements::class);
    }
}
