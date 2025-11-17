<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Huzas extends Model
{
    use HasFactory;

    protected $table = 'huzas';

    protected $fillable = ['ev', 'het'];

    public function huzott()
    {
        return $this->hasMany(Huzott::class, 'huzasid');
    }

    public function nyeremenyek()
    {
        return $this->hasMany(Nyeremeny::class, 'huzasid');
    }

    public function getSzamokListaAttribute(): string
    {
        return $this->huzott
            ->sortBy('szam')
            ->pluck('szam')
            ->implode(' - ');
    }
}
