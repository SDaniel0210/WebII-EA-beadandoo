<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MessageController extends Controller
{
    
    public function create()
    {
        return view('message'); 
    }

    
    public function store(Request $request)
    {
    $validated = $request->validate([
        'name'    => 'required|min:3|max:50',
        'email'   => 'required|email',
        'subject' => 'required|min:3|max:100',
        'body'    => 'required|min:5|max:2000',
    ]);

    Message::create([
        'user_id'    => Auth::id(),
        'name'       => $validated['name'],
        'email'      => $validated['email'],
        'subject'    => $validated['subject'],
        'body'       => $validated['body'],
        'created_at' => now(),
    ]);

    return redirect()
        ->back()
        ->with('ok', 'Üzeneted sikeresen elküldtük!');
    }

}
