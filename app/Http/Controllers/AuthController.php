<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function showRegister()
    {
        return view('registration');
    }

    public function storeRegister(Request $request)
    {
        $data = $request->validate([
            'name'     => ['required','string','max:100'],
            'email'    => ['required','string','email','max:150','unique:users,email'],
            'password' => ['required','confirmed', Password::min(8)],
        ]);

        $user = User::create([
            'name'     => $data['name'],
            'email'    => $data['email'],
            'password' => Hash::make($data['password']),
            'role'     => 'registered',
        ]);

        Auth::login($user);

        return redirect('/')->with('ok','Sikeres regisztráció!');
    }

    // ==== LOGIN ====
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'name'     => ['required', 'string'],
            'password' => ['required'],
        ]);

        if (Auth::attempt([
            'name'     => $credentials['name'],
            'password' => $credentials['password'],
        ])) {
            $request->session()->regenerate();
            return redirect('/')->with('ok', 'Sikeres bejelentkezés!');
        }

        return back()->withErrors([
            'login' => 'Hibás felhasználónév vagy jelszó.',
        ])->withInput($request->only('name'));
    }

    // ==== LOGOUT ====
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/')->with('ok','Sikeresen kijelentkeztél.');
    }
}
