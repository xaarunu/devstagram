@extends('layouts.app')

@section('titulo')
    Crear cuenta
@endsection

@section('contenido')
    <div class="md:flex md:justify-center">

        <div class="md:w-4/12 md:items-center">
            <img src="{{ asset('img/login.jpg') }}" alt="Crear cuenta" >
        </div>

        <div class="md:w-4/12 bg-white shadow-xl p-6 rounded-lg" >

            <form action="{{route('crear-usuario.store')}}" method="POST" >
            @csrf
            @method('post')
                <div class="mb-5">
                    <label for="name" class="block uppercase text-gray-500  font-bold mb-2">
                        Nombre:
                    </label>

                    <input 
                        id="name" 
                        name="name"
                        value="{{ old('name') }}"
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
                        value="{{ old('username') }}"
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
                        value="{{ old('email') }}"
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

                <div class="mb-5">
                    <label for="password" class="block uppercase text-gray-500 text-sm font-bold mb-2">
                        contraseña:
                    </label>

                    <input 
                        id="password" 
                        name="password"
                        type="password"
                        placeholder="Tu contraseña" 
                        class="border p-3 rounded-lg w-full @error('password') border-red-500 @enderror"
                    />
                    @error('password')
                    <div class="text-red-500 text-sm my-2 rounded-lg p-2 text-center">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-5">
                    <label for="password_confirmation" class="block uppercase text-gray-500 text-sm font-bold mb-2">
                        Repetir contraseña:
                    </label>

                    <input 
                        id="password_confirmation" 
                        name="password_confirmation"
                        type="password"
                        placeholder="Repite tu  contraseña" 
                        class="border p-3 rounded-lg w-full @error('password_confirmation') border-red-500 @enderror"
                    />

                    @error('password_confirmation')
                    <div class="text-red-500 text-sm my-2 rounded-lg p-2 text-center">{{ $message }}</div>
                    @enderror
                </div>

                <input  type="submit" 
                        value="Crear cuenta" 
                        class="bg-sky-600 hover:bg-slate-700 p-3
                        transition-colors cursor-pointer uppercase font-bold w-full text-white rounded-lg" >
            </form>
        </div>
    </div>

@endsection

