<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="cs/estilo.css?x=0">
    <title>@yield('title')</title>
  </head>
<body>
<header>
        <div class="logo">
          <a href=""><img src="img/sorteo.png" alt="#"></a>
        </div>
        <nav>
            <a class="h" href="/index">Inicio</a>
            <a class="h" href="/sorteos">Sorteos</a>
            <a class="h" href="/ganadores">Ganadores</a>
            <a class="h" href="/contacto">Contactenos</a>
            <a class="h" href="/perfil_usu">Perfil Usuario</a>
            <a href="{{ route('login.destroy') }}" class="h">Cerrar Sesión</a>
        </nav>
        
      </header>
    <div class="col-sm-12">
          @yield('contenido')
        </div>
</body>
</html>