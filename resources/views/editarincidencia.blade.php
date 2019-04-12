<!-- ///////////////////---------------------------------\\\\\\\\\\\\\\\\\\\\\\\\\\
                         FORMULARIO DE EDITAR INCIDENCIAS
    ////////////////////----------------------------------\\\\\\\\\\\\\\\\\\\\\\\\\\ -->



<form action="{{url('incidencias', $incidencia->id)}}" method="POST" role="form">



<style>
    h1{
        font: bold 80px  Agency FB, sans-serif;
    color:yellow;
    text-shadow: 10px 5px 3px black;
    padding: 15px 0px;
    }
    h1{
        margin-left:420px;
        margin-top:10px ;
    }

    hr{
    color: gray;
    border:2px solid gray;
    width: auto;
    }

    hr{
        margin-top:-40px;
    }

    legend{
    font: bold 25px Agency FB, sans-serif;
    color: teal;
    text-align: left;

    padding: 20px 180px;
    }

    label {
    font:  bold 20px Agency FB, sans-serif;
    margin-left:  40px;


    }
    /* TITULO*/
    #tit{
        border: 2px solid gray;
        width:24%;
        height:30px;
        margin-left:55px;
        margin-top:50px;
    }

    /*DESCRIPCION*/
    #des{
        border: 2px solid gray;
        width:24%;
        height:30px;
        margin-left:10px;
        margin-top:20px;
    }

    /*MODULO*/
    #mod{
        border: 2px solid gray;
        width:24%;
        height:30px;
        margin-left:45px;
        margin-top:20px;
    }


     /*TIPO INCIDENCIA*/
     #tipo{
        border: 2px solid gray;
        width:21%;
        height:30px;
        margin-left:10px;
        margin-top:20px;
    }

     /*USERS*/
     #user{
        border: 2px solid gray;
        width:24%;
        height:30px;
        margin-left:65px;
        margin-top:20px;
    }

    button{
        border-radius:  20px ;
        background-color: black;
        color: white;
        width: 200px;
        height: 40px;
        margin-left: 290px;
        text-align: center;
        padding: 5px;
        margin-top:30PX;
    }
    button:hover{
        background-color: #434343;
        color: yellow;
    }
    .linea {
        color: black;
        border:1px solid gray;
        width: 600px;
        margin-top:-10px;
        margin-left:5px;
    }

</style>
<h1>TABLA INCIDENCIAS</h1>
<hr>

@csrf()
@method('PATCH')
<legend>ACTUALIZAR INCIDENCIA</legend>
<hr class="linea">
<div class="form-group">

    <label for="">TITULO</label>
    <input id="tit" value="{{$incidencia->titulo}}" name="titulo" type="form-control" id="titulo" placeholder="Ingrese el Titulo">
</div>
    <br>
<div class="form-group">

    <label for="">DESCRIPCION</label>
    <input id="des" alue="{{$incidencia->descripcion}}" name="descripcion" type="form-control" id="descripcion" placeholder="Ingrese la descripcion">
</div>
    <br>
<div class="form-group">

    <label for="">MODULO</label>
    <input id="mod" value="{{$incidencia->modulo_id}}" name="modulo_id" type="form-control" id="modulo_id" placeholder="Ingrese el Modulo">

</div>
    <br>
<div class="form-group">

    <label for="">TIPO DE INCIDENCIA</label>
    <input id="tipo" value="{{$incidencia->tipo_incidencia_id}}" name="tipo_incidencia_id" type="form-control" id="tipo_incidencia_id" placeholder="Ingrese el nombre">
</div>
    <br>
<div class="form-group">

  <div class="form-group">

    <label for="">USER</label>
    <input id="user" value="{{$incidencia->user_id}}" name="user_id" type="form-control" id="user_id" placeholder="Ingrese el nombre">
</div>
    <br><br>
<button type="submit" class="btn btn-primary">ACTUALIZAR</button>
</form>
