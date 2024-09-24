<?php

namespace App\Http\Controllers\Auth;

use App\Models\Usuario;
//use GuzzleHttp\Psr7\Request;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RegisterController extends Controller
{
    public function index(){
        $usuarios = Usuario::all();

        return view('inicio', ['usuarios'=> $usuarios]);
    }

    public function crear()
    {
        return view('auth.register');
    }


    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'username' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:8',
            'password_confirmation' => 'required|min:8|same:password',
        ]);

        $usuario =  Usuario::create($data);

        return redirect(route('inicio'));
 
    }

    public function editar(Usuario $usuario){
        return view ('edit-usuario' , ['usuario' => $usuario]);
    }


    public function update(Usuario $usuario ,Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'username' => 'required',
            'email' => 'required|email',
        ]);

        $usuario->update($data);

        return redirect(route('inicio'))->with('success', 'Usuario actualizado correctamente');
 
    }

    public function destroy (Usuario $usuario)
    {
        $usuario->delete();

        return redirect(route('inicio'))->with('success', 'Usuario eliminado correctamente');
    }

}
