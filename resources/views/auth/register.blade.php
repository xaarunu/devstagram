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

            <form action="crear-cuenta" method="POST" >
            @csrf
                <div class="mb-5">
                    <label for="name" class="block uppercase text-gray-500  font-bold mb-2">
                        Nombre:
                    </label>

                    <input 
                        id="name" 
                        name="name"
                        
                        type="text"
                        placeholder="Tu nombre" 
                        class="border p-3 rounded-lg w-full"
                    />
                       
                      
            
                </div>

                 
                <div class="mb-5">
                    <label for="username" class="block uppercase text-gray-500 text-sm font-bold mb-2">
                        Username:
                    </label>

                    <input 
                        id="username" 
                        name="username"
                        type="text"
                        placeholder="Tu nombre de usuario" 
                        class="border p-3 rounded-lg w-full"
                    />
                </div>

                <div class="mb-5">
                    <label for="email" class="block uppercase text-gray-500 text-sm font-bold mb-2">
                        Email:
                    </label>

                    <input 
                        id="email" 
                        name="email"
                        type="email"
                        placeholder="Tu email" 
                        class="border p-3 rounded-lg w-full"
                    />
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
                        class="border p-3 rounded-lg w-full"
                    />
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
                        class="border p-3 rounded-lg w-full"
                    />
                </div>

                <input  type="submit" 
                        value="Crear cuenta" 
                        class="bg-sky-600 hover:bg-slate-700 p-3
                        transition-colors cursor-pointer uppercase font-bold w-full text-white rounded-lg" >
            </form>
        </div>
    </div>

@endsection

