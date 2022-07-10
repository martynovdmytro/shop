<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegistrationController extends Controller
{

    public function index()
    {
        return view('components.header.forms.register');
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
}
