<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Videogame extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'brand', 'release_year'];

    public function games()
    {
        return $this->hasMany(Game::class);
    }
}
