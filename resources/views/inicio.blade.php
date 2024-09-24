@extends('layouts.app')

@section('titulo')
    Inicio
@endsection

@section('contenido')
    <div class="md:flex md:justify-center">
        <div class=" md:w-10/12 bg-white shadow-xl p-6 rounded-lg">
            <h2 class="text-center font-black text-3xl mb-10">Usuarios</h2>
            <table class="table-auto w-full">
                <thead>
                    <tr>
                        <th class="border px-4 py-2">ID</th>
                        <th class="border px-4 py-2">Nombre</th>
                        <th class="border px-4 py-2">Username</th>
                        <th class="border px-4 py-2">Email</th>
                        <th class="border px-4 py-2">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                   
                      
                </tbody>
            </table>
        </div>
    </div>
  
@endsection