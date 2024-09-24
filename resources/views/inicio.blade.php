@extends('layouts.app')

@section('titulo')
    Inicio
@endsection

@section('contenido')
    <div class="md:flex md:justify-center">
        <div class=" md:w-10/12 bg-white shadow-xl p-6 rounded-lg">
            <h2 class="text-center font-black text-3xl mb-10">Usuarios</h2>
            <div>
                @if(@session()->has('success'))
                    <p class="bg-green-500 text-white p-4 mb-4">
                        {{session('success')}}
                    </p>
                    
                @endif
            </div>
            <table class="table-auto w-full">
                <thead>
                    <tr>
                        <th class="border px-4 py-2">ID</th>
                        <th class="border px-4 py-2">Nombre</th>
                        <th class="border px-4 py-2">Username</th>
                        <th class="border px-4 py-2">Email</th>
                        <th class="border px-4 py-2" colspan="2">Acciones</th>
                    </tr>

                    @foreach ($usuarios as $usuario)
                        <tr>
                            <td  class="border px-4 py-2">{{$usuario->id}}</td>
                            <td  class="border px-4 py-2">{{$usuario->name}}</td>
                            <td  class="border px-4 py-2">{{$usuario->username}}</td>
                            <td  class="border px-4 py-2">{{$usuario->email}}</td>
                            <td  class="border px-4 py-2"> 
                                <a href="{{route('editar-usuario' ,['usuario' => $usuario])}}">Editar</a>
                            </td>
                            <td  class="border px-4 py-2">
                                <form method="POST" action="{{route('borrar-usuario' ,['usuario' => $usuario])}}">
                                @csrf
                                @method('DELETE')
                                <button type="submit">Eliminar</button>
                                </form>    
                            </td>

                    @endforeach
                </thead>
                <tbody>
                   
                      
                </tbody>
            </table>
        </div>
    </div>
  
@endsection