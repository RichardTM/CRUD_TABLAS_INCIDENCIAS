<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

@extends('layouts.app')
@section('content')
<body>
    <!-- ///////////////////---------------------------------\\\\\\\\\\\\\\\\\\\\\\\\\\
                                LISTA DE ENTIDADES
    ////////////////////----------------------------------\\\\\\\\\\\\\\\\\\\\\\\\\\ -->

<h1>LISTA DE ENTIDADES</h1>
<hr>

<!-- <button id="vol" type="submit" class="btn btn-primary><a href="/">MENU PRINCIPAL</button> -->


<table class="table table-hover">






    <thead >


        <tr>

        <th>ENTIDAD</th>

        <th>OPCIONES</th>


        </tr>

    </thead>

    <tbody>

    @foreach ($rs as $item)


        <tr>

        <td>{{$item->entidad}}</td>


                <td>


                <button id="edit" type="submit" class="btn btn-primary"><a href="/entidades/edit/{{$item->id}}">EDITAR</button>


            <form action="{{url('entidades', $item->id)}}" method="POST" role="form" id="delete_form_{{$item->id}}">


    @csrf()

    @method('DELETE')

                <button id="eli" type="submit" class="btn btn-primary"><a href="javascript:{}" onclick="document.getElementById('delete_form_{{$item->id}}').submit();">ELIMINAR</a></button>


    </form>

    <hr class="linea_cuadro">
        </td>


        </tr>

    @endforeach


    </tbody>
</div>

</table>

</body>
@endsection
</html>

