<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EditController extends Controller
{
    
    public function crear()
    {
        return view('edit-usuario'); 
    }

    public function store()
    {
        dd('post..');
    }
}
