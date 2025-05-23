<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Game extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'videogame_id'];

    public function videogame()
    {
        return $this->belongsTo(Videogame::class);
    }
}



