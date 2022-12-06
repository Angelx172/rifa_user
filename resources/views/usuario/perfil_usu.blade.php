@extends('usuario.nav_usuario')

@section('title', "Ganadores")

@section('contenido')
<link rel="stylesheet" href="hs/perfil.css">

<body>
    <section class="perfil-usuario">
        <div class="contenedor-perfil">
            <div class="portada-perfil" style="background-color:gold">
                <div class="sombra"></div>
                <div class="avatar-perfil">
                    <img src="img/perfil.png" alt="img">
                    {{-- <a href="#" class="cambiar-foto">
                        <i class="fas fa-camera"></i> 
                        <span>Cambiar foto</span>
                    </a> --}}
                </div>
                <div class="datos-perfil">
                    <h4 class="titulo-usuario">Bienvenido <b>{{ auth()->user()->name }}</b></h4>
                    <ul class="lista-perfil">
                    </ul>
                </div>
                <div class="opcciones-perfil">
                    <button type="">Cambiar portada</button>
                    <button type=""><i class="fas fa-wrench"></i></button>
                </div>
            </div>
            <div class="menu-perfil">
                <ul>
                    <li><a href="/vista_recibos" title=""><i class="icono-perfil fas fa-bullhorn"></i>Recibos</a></li>

                </ul>
            </div>
        </div>
    </section>
</body>