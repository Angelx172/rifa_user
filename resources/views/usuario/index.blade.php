<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="cs/estilo.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
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
            <a href="{{ route('login.destroy') }}" class="h">Cerrar Sesión</a>
        </nav>
     </header>
</body>
</html>