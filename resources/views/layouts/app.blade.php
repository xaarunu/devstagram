<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>DevStagram - @yield('titulo')</title>

        @vite('../resources/css/app.css')
    </head>
    <body>
        
        <header class="p-5 border-b bg-white shadow">
            <div class="container mx-auto flex justify-between items-center">

                <h1 class="text-3xl font-extrabold">
                    DevStagram
                </h1>

                <nav>
                    <a class="font-bold uppercase text-gray-600 text-sm " href="#">Login</a>
                    <a class="font-bold uppercase text-gray-600 text-sm " href="crear-cuenta">Crear cuenta</a>
                    <a class="font-bold uppercase text-gray-600 text-sm " href="/devstagram/public"> Inicio</a>
                    <a class="font-bold uppercase text-gray-600 text-sm " href="nosotros"> Nosotros </a>
                    <a class="font-bold uppercase text-gray-600 text-sm " href="tienda"> Tienda </a>
                </nav>

            </div>
        </header>

      <main class="container mx-auto mt-10">

        
        <h2 class ="text-center font-black text-3xl mb-10">
        @yield('titulo')
        </h2>
        
        <hr>
            
        @yield('contenido')


      </main>

      <footer class="text-center p-5 text-gray-500 font-bold mt-10">
        Devstagram - Todos los derechos reservados
        
        {{ date('Y') }}
      </footer>

      
    </body>
</html>
