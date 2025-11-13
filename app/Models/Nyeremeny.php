<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nyeremeny extends Model
{
    use HasFactory;

    protected $table = 'nyeremeny';

    protected $fillable = ['huzasid', 'talalat', 'darab', 'ertek'];

    public function huzas()
    {
        return $this->belongsTo(Huzas::class, 'huzasid');
    }
}
