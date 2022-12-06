@extends('navbar_admin.nav')

@section('title', "Nueva Rifa")

@section('contenido')
<br>
<h3>
    Nueva Rifa
</h3>
<form action="{{ route('rifa.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="row">
        <div class="col-sm-12">
            <label for="InputNombre" class="form-label">Nombre de la Rifa</label>
            <input type="text" name="nombre_rifa" id="InputNombre" class="form-control" placeholder="..."><br>
            <label for="InputDescripcion" class="form-label">Descripcion</label>
            <input type="text" name="descripcion_rifa" id="InputDescripcion" class="form-control" placeholder="..."><br>
            <label for="InputPrecio" class="form-label">Precio</label>
            <input type="text" name="precio_rifa" id="InputPrecio" class="form-control" placeholder="..."><br>
            <label for="InputBoletos" class="form-label">Boletos</label>
            <input type="text" name="num_boletos_rifa" id="InputBoletos" class="form-control" placeholder="..."><br>
            <label for="InputImagen" class="form-label">Imagen</label><br>
            <input type="file" name="imagen_rifa"><br><br>
            <label for="InputFecha" class="form-label">Fecha de Cierre</label><br>
            <input type="datetime-local" name="fecha_cierre_rifa" id="InputFecha" class="form-control" placeholder="..."><br>
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