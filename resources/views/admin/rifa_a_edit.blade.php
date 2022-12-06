@extends('navbar_admin.nav')

@section('title', "Editar")

@section('contenido')
<br>
<h3>
    Editar Rifa
</h3>
<form action="{{ route('rifa.update_a', $id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('put')
    <div class="row">
        <div class="col-sm-12">
            <label for="InputNombre" class="form-label">Nombre de la Rifa</label>
            <input type="text" name="nombre_rifa" id="InputNombre" class="form-control" value="{{ $id->nombre_rifa }}"><br>
            <label for="InputDescripcion" class="form-label">Descripcion</label>
            <input type="text" name="descripcion_rifa" id="InputDescripcion" class="form-control" value="{{ $id->descripcion_rifa }}"><br>
            <label for="InputPrecio" class="form-label">Precio</label>
            <input type="text" name="precio_rifa" id="InputPrecio" class="form-control" value="{{ $id->precio_rifa }}"><br>
            <label for="InputBoletos" class="form-label">Boletos</label>
            <input type="text" name="num_boletos_rifa" id="InputBoletos" class="form-control" value="{{ $id->num_boletos_rifa }}"><br>
            <label for="InputImagen" class="form-label">Imagen</label><br>
            <input type="file" name="imagen_rifa"><br><br>
            <label for="InputFecha" class="form-label">Fecha de Cierre</label><br>
            <input type="datetime-local" name="fecha_cierre_rifa" id="InputFecha" class="form-control" value="{{ $id->fecha_cierre_rifa }}"><br>
            <label for="InputEstatus" class="form-label">Estatus</label><br>
            {{-- <input type="text" name="estatus_rifa" id="InputEstatus" class="form-control" value="{{ $id->estatus_rifa }}"> --}}
            <select name="estatus_rifa" id="SelectEstatus" class="form-select">
                <option value="0">Inactiva</option>
                <option value="1">Activa</option>
                <option value="2">Finalizada</option>
            </select>
            <br>
        </div>
        <div class="col-sm-12 text-end my-2">
            <button type="submit" class="btn btn-primary">
                Actualizar
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