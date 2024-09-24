@extends('layouts.app')

@section('titulo')
    Editar usuario
@endsection

@section('contenido')
    <div class="md:flex md:justify-center">

        <div class="md:w-4/12 bg-white shadow-xl p-6 rounded-lg" >

            <form action="{{route('editar-usuario' , ['usuario' => $usuario])}}"  method="POST" >
            @csrf
            @method('put')
            <div>
             @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            </div>
                <div class="mb-5">
                    <label for="name" class="block uppercase text-gray-500  font-bold mb-2">
                        Nombre:
                    </label>

                    <input 
                        id="name" 
                        name="name"
                        value="{{ $usuario->name }}"
                        type="text"
                        placeholder="Tu nombre" 
                        class="border p-3 rounded-lg w-full @error('name') border-red-500 @enderror"
                    />
                    @error('name')
                        <div class="text-red-500 text-sm my-2 rounded-lg p-2 text-center">{{ $message }}</div>
                    @enderror
            
                </div>

                 
                <div class="mb-5">
                    <label for="username" class="block uppercase text-gray-500 text-sm font-bold mb-2">
                        Username:
                    </label>

                    <input 
                        id="username" 
                        name="username"
                        value="{{ $usuario->username }}"
                        type="text"
                        placeholder="Tu nombre de usuario" 
                        class="border p-3 rounded-lg w-full @error('username') border-red-500 @enderror"
                    />
                    @error('username')
                    <div class="text-red-500 text-sm my-2 rounded-lg p-2 text-center">{{ $message }}</div>
                    @enderror

                </div>

                <div class="mb-5">
                    <label for="email" class="block uppercase text-gray-500 text-sm font-bold mb-2">
                        Email:
                    </label>

                    <input 
                        value="{{ $usuario->email }}"
                        id="email" 
                        name="email"
                        type="email"
                        placeholder="Tu email" 
                        class="border p-3 rounded-lg w-full @error('email') border-red-500 @enderror"
                    />
                    @error('email')
                    <div class="text-red-500 text-sm my-2 rounded-lg p-2 text-center">{{ $message }}</div>
                    @enderror
                </div>

                <input  type="submit" 
                        value="Actualizar" 
                        class="bg-sky-600 hover:bg-slate-700 p-3
                        transition-colors cursor-pointer uppercase font-bold w-full text-white rounded-lg" >
            </form>
        </div>
    </div>

@endsection