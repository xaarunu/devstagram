<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;

class RegisterController extends Controller
{

    public function crear()
    {
        return view('auth.register');
    }

    public function store()
    {
        dd('post..');
    }
}
