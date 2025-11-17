<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Huzott extends Model
{
    use HasFactory;

    protected $table = 'huzott';

    protected $fillable = ['huzasid', 'szam'];

    public function huzas()
    {
        return $this->belongsTo(Huzas::class, 'huzasid');
    }
}
