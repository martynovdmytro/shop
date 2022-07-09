<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthorisationController extends Controller
{

    public function index()
    {
        return view('components.header.forms.login');
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
                ->with('success', 'Welcome!');
        }

        return back()
            ->withErrors('Login fail')
            ->withInput();

    }

    public function logout()
    {
        auth()->logout();

        return redirect('/');

    }
}
