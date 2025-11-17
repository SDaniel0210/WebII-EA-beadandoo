<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserCRUDController extends Controller
{
    public function index()
    {
        $users = User::orderBy('id')->get();
        return view('users', compact('users'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name'     => 'required|min:3|max:50',
            'email'    => 'required|email|unique:users,email',
            'password' => 'required|min:6|max:100',
            'role'     => 'required|string|max:30',
        ]);

        User::create([
            'name'     => $validated['name'],
            'email'    => $validated['email'],
            'password' => Hash::make($validated['password']),
            'role'     => $validated['role'],
        ]);

        return redirect()
            ->route('users.index')
            ->with('ok', 'Új dolgozót sikeresen hozzáadtuk.');
    }

    // MÓDOSÍTÁS
    public function update(Request $request, User $user)
    {
        $validated = $request->validate([
            'name'  => 'required|min:3|max:50',
            'email' => 'required|email|unique:users,email,' . $user->id,
            'role'  => 'required|string|max:30',
        ]);

        $user->update([
            'name'  => $validated['name'],
            'email' => $validated['email'],
            'role'  => $validated['role'],
        ]);

        if ($request->filled('password')) {
            $request->validate([
                'password' => 'nullable|min:6|max:100',
            ]);
            $user->password = Hash::make($request->password);
            $user->save();
        }

        return redirect()
            ->route('users.index')
            ->with('ok', 'Dolgozó adatai frissítve.');
    }

    public function destroy(User $user)
    {
        $user->delete();

        return redirect()
            ->route('users.index')
            ->with('ok', 'Dolgozót töröltük.');
    }
}
