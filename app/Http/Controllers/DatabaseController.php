<?php

namespace App\Http\Controllers;

use App\Models\Huzas;
use Illuminate\Http\Request;

class DatabaseController extends Controller
{
    public function index()
    {
        $draws = Huzas::with([
                'huzott' => fn ($q) => $q->orderBy('szam'),
                'nyeremenyek' => fn ($q) => $q->orderByDesc('talalat'),
            ])
            ->orderByDesc('ev')
            ->orderByDesc('het')
            ->paginate(20);

        return view('datas', compact('draws'));
    }
}
