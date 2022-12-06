@extends('navbar_admin.nav')

@section('title', "Nuevo Usuario")

@section('contenido')
<br>
<h3>
    Nuevo Usuario
</h3>
<form action="{{ route('usuario.store') }}" method="POST">
    @csrf
    <div class="row">
        <div class="col-sm-12">
            <label for="InputName" class="form-label">Nombre</label>
            <input type="text" name="name" id="InputName" class="form-control" placeholder="..."><br>
            <label for="InputEmail" class="form-label">Correo</label>
            <input type="text" name="email" id="InputEmail" class="form-control" placeholder="..."><br>
            <label for="InputPassword" class="form-label">Contraseña</label>
            <input type="password" name="password" id="InputPassword" class="form-control" placeholder="..."><br>
            <br><br>
            <select name="role" id="SelectRole" class="form-select">
                <option value="user">Usuario</option>
                <option value="admin">Admin</option>
            </select>
        </div>
        <div class="col-sm-12 text-end my-2">
            <button type="submit" class="btn btn-primary">
                Guardar
            </button>
        </div>
    </div>
</form>
@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
@endsection