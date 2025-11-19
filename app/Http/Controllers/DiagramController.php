<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;
use Illuminate\Support\Facades\DB;

class DiagramController extends Controller
{
    public function index()
    {
        // Csoportosítjuk üzeneteket nap szerint
        $data = Message::select(
                    DB::raw('DATE(created_at) as nap'),
                    DB::raw('COUNT(*) as db')
                )
                ->groupBy('nap')
                ->orderBy('nap', 'asc')
                ->get();

        // Külön tömbbe a napok és darabszámok
        $labels = $data->pluck('nap');
        $values = $data->pluck('db');

        return view('diagram', compact('labels', 'values'));
    }
}
