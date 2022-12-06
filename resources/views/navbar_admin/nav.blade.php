<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <title>@yield('title')</title>
</head>
<body class="bg-light">
    <br>
    <div class="container shadow bg-white">
        <div class="row">
            <div class="col-sm-12"><br>
                <a href="{{ route('admin.rifa_a') }}" class="btn btn-dark">Todas las Rifas</a>
                <a href="{{ route('admin.rifa_ac') }}" class="btn btn-dark">Rifas Activas</a>
                <a href="{{ route('admin.rifa_af') }}" class="btn btn-dark">Rifas Finalizadas</a>
                <a href="{{ route('admin.rifa_ai') }}" class="btn btn-dark">Rifas Inactivas</a>
                <a href="{{ route('admin.usuarios') }}" class="btn btn-dark">Usuarios</a>
                <a href="" class="btn btn-dark">Recibos</a>
                <a href="" class="btn btn-dark">Sorteo</a>
                <a href="{{ route('login.destroy') }}" class="btn btn-danger">Cerrar Sesión</a>
            </div>
            <div class="col-sm-12">
                @yield('contenido')
            </div>
        </div>
    </div>
</body>
</html>