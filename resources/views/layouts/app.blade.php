<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>CRUD - @yield('titulo')</title>

        @vite('../resources/css/app.css')
    </head>
    <body>
        
        <header class="p-5 border-b bg-white shadow">
            <div class="container mx-auto flex justify-between items-center">

                <h1 class="text-3xl font-extrabold">
                    CRUD
                </h1>

                <nav>
                    <a class="ml-2.5 font-bold uppercase text-gray-600 text-sm " href=" {{route('crear-usuario')}}">CREAR USUARIO</a>
                    <a class="ml-2.5 font-bold uppercase text-gray-600 text-sm " href=" {{route('inicio')}}"> INICIO</a>
                  
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
        CRUD - Todos los derechos reservados
        
        {{ date('Y') }}
      </footer>

      
    </body>
</html>
