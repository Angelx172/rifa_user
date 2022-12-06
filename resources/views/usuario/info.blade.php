@extends('usuario.nav_usuario')

@section('title', "Ganadores")

@section('contenido')

<link rel="stylesheet" href="sorte1/vi.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</head>
<body>
   <div>
    <h1>PREMIO</h1>
    </div>
    <div class="mundo">
        <div class="img2">
            <img src="img/perfil.png" alt="" width="300px"
            height="300px">
            <a href="/tike"><button>Ver lista</button></a>
        </div>
        <div class="info">
            <br><br>
            <h2>INFORMACION DEL PREMIO</h2>
            <br>
            <p>Premio: </p>
            <p>Fecha de Finalizacion: </p>
            <p>Numeros Disponibles: </p>
            <p>Valor del Boleto: </p>
        </div>
    </div>
</body>