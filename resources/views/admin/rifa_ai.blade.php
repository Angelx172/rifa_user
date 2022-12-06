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

@section('title', "Rifas Inactivas")

@section('contenido')
    <br>
    <h3>
        Listado de Rifas Inactivas
    </h3>
    <a class="btn btn-info" href="{{ route('admin.rifa_a_create') }}">Nueva Rifa</a>
    <table class="table table-stripped table-hover">
        <thead>
            <tr>
                <th>
                    Nombre
                </th>
                <th>
                    Descripcion
                </th>
                <th>
                    Precio
                </th>
                <th>
                    Boletos
                </th>
                <th>
                    Imagen
                </th>
                <th>
                    Fecha de Realizacion
                </th>
                <th>
                    Estatus
                </th>
                <th>
                    Opciones
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($rifas as $rifa)
                <tr>
                    <td>
                        {{ $rifa->nombre_rifa }}
                         {{-- - <a href="{{ route('categoria.edit', $categoria->id) }}">Editar</a> --}}
                    </td>
                    <td>
                        {{ $rifa->descripcion_rifa }}
                    </td>
                    <td>
                        ${{ $rifa->precio_rifa }} MXN
                    </td>
                    <td>
                        {{ $rifa->num_boletos_rifa }}
                    </td>
                    <td>
                        {{-- {{ $rifa->imagen_rifa }} --}}
                        <img src="{{ asset('img_rifa/' . $rifa->imagen_rifa) }}" style="width: 30vh" alt="">
                    </td>
                    <td>
                        {{ $rifa->fecha_cierre_rifa }}
                    </td>
                    <td>
                        {{ $rifa->estatus() }}
                    </td>
                    <td>
                        <a class="btn btn-outline-info" href="{{ route('admin.rifa_a_edit', $rifa->id) }}">Editar</a>
                        <form action="{{ route('rifa.destroy_a', $rifa->id) }}" method="POST" style="display:inline-block">
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