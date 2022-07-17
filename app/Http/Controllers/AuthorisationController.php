<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthorisationController extends Controller
{
    public function login()
    {
        return view('components.header.auth.login');
    }

    public function register()
    {
        return view('components.header.auth.register');
    }

    public function store()
    {
        $attributes = request()
            ->validate([
                'login' => ['required'],
                'email' => ['required'],
                'password' => ['required'],

            ]);

        $attributes['password'] = bcrypt($attributes['password']);

        $user = User::create($attributes);

        auth()->login($user);

        session()->flash('message', 'Your account created');

        return redirect('/');
    }

    public function auth(Request $request)
    {
        $attributes = $request->validate([
            'email' => ['required'],
            'password' => ['required']
        ]);

        if (Auth::attempt($attributes)) {
            $request->session()->regenerate();
            return redirect('/')
                ->with('message', 'Welcome!');
        }

        return back()
            ->withErrors('Login fail')
            ->withInput();
    }

    public function destroy(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
