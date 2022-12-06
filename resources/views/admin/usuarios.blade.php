{{-- @extends('layouts.app_admin') --}}

{{-- @section('title', 'Admin Home')

@section('content')

    <h1 class="text-5xl text-center pt-24">Administrador</h1>

@endsection --}}
{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Administrador</title>
</head>
<body>
    <h1>Este es el CRUD para el Administrador</h1>
</body>
</html> --}}
@extends('navbar_admin.nav')

@section('title', "Usuarios")

@section('contenido')
    <br>
    <h3>
        Listado de Usuarios
    </h3>
    <a class="btn btn-info" href="{{ route('admin.usuarios_create') }}">Nuevo Usuario</a>
    <table class="table table-stripped table-hover">
        <thead>
            <tr>
                <th>
                    Nombre
                </th>
                <th>
                    Correo
                </th>
                <th>
                    Contraseña
                </th>
                <th>
                    Rol
                </th>
                <th>
                    Opciones
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <td>
                        {{ $user->name }}
                         {{-- - <a href="{{ route('categoria.edit', $categoria->id) }}">Editar</a> --}}
                    </td>
                    <td>
                        {{ $user->email }}
                    </td>
                    <td>
                        {{ $user->password }}
                    </td>
                    <td>
                        {{ $user->role }}
                    </td>
                    {{-- <td>
                        {{ $rifa->estatus() }}
                    </td> --}}
                    <td>
                        <a class="btn btn-outline-info" href="{{ route('admin.usuarios_edit', $user->id) }}">Editar</a>
                        <form action="{{ route('user.destroy', $user->id) }}" method="POST" style="display:inline-block">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-outline-danger">
                                Eliminar
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

@endsection