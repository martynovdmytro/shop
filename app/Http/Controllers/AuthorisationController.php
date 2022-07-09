<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AuthorisationController extends Controller
{

    public function index()
    {
        return view('components.header.forms.login');
    }

    public function auth()
    {
        dd('ZALUPA');
    }
}
