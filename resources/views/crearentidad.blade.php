<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

<!-- ///////////////////---------------------------------\\\\\\\\\\\\\\\\\\\\\\\\\\
                             GUARDAR NUEVO ENTIDAD
    ////////////////////----------------------------------\\\\\\\\\\\\\\\\\\\\\\\\\\ -->



</head>
@extends('layouts.app')
@section('content')

<body>
    <form action="/entidades" method="POST" role="form">


    @csrf()

    <h1>TABLA ENTIDADES</h1>
    <hr>

    <legend>GUARDAR UNA ENTIDAD</legend>
    <hr class="linea">

    <!-- <div class="form-group"> -->

    <!-- <label for="">Ingrese el Nuevo Entidad</label> -->
    <!-- <input type="text" class="form-control" id="entidad" name="entidad" placeholder=" Ingrese el Nuevo Cargo"> -->
 <!-- </div> -->

    @component('componentes.text', ['name' => 'entidad', 'label' => 'NOMBRES'])
    @endcomponent
    <button type="submit" class="btn btn-primary">GUARDAR</button>
    </form>

</body>
@endsection
</html>



