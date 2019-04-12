<form action="{{url('perfiles', $perfil->id)}}" method="POST" role="form">


    <!-- ///////////////////---------------------------------\\\\\\\\\\\\\\\\\\\\\\\\\\
                           FORMULARIO DE EDITAR PERFIL
    ////////////////////----------------------------------\\\\\\\\\\\\\\\\\\\\\\\\\\ -->


    <style>
        h1 {
            font: bold 80px Agency FB, sans-serif;
            color: yellow;
            text-shadow: 10px 5px 3px black;
            padding: 15px 0px;
        }

        h1 {
            margin-left: 420px;
            margin-top: 10px;
        }

        hr {
            color: gray;
            border: 2px solid gray;
            width: auto;
        }

        hr {
            margin-top: -40px;
        }

        legend {
            font: bold 25px Agency FB, sans-serif;
            color: teal;
            text-align: left;

            padding: 20px 180px;
        }

        label {
            font: bold 20px Agency FB, sans-serif;
            margin-left: 40px;


        }

        /* NONBRES*/
        #nom {
            border: 2px solid gray;
            width: 24%;
            height: 30px;
            margin-left: 19px;
            margin-top: 50px;
        }

        /*APELLIDOS*/
        #ape {
            border: 2px solid gray;
            width: 24%;
            height: 30px;
            margin-left: 10px;
            z margin-top: 20px;
        }

        /*SEXO*/
        #sex {
            border: 2px solid gray;
            width: 24%;
            height: 30px;
            margin-left: 47px;
            margin-top: 20px;
        }


        /*CARGO*/
        #car {
            border: 2px solid gray;
            width: 24%;
            height: 30px;
            margin-left: 35px;
            margin-top: 20px;
        }


        /*ENTIDAD*/
        #ent {
            border: 2px solid gray;
            width: 24%;
            height: 30px;
            margin-left: 24px;
            margin-top: 20px;
        }

        /*USERS*/
        #user {
            border: 2px solid gray;
            width: 24%;
            height: 30px;
            margin-left: 43px;
            margin-top: 20px;
        }

        button {
            border-radius: 20px;
            background-color: black;
            color: white;
            width: 200px;
            height: 40px;
            margin-left: 260px;
            text-align: center;
            padding: 5px;
            margin-top: 30PX;
        }

        button:hover {
            background-color: #434343;
            color: yellow;
        }

        .linea {
            color: black;
            border: 1px solid gray;
            width: 600px;
            margin-top: -10px;
            margin-left: 5px;
        }
    </style>

    @csrf()

    <h1>TABLA PERFILES</h1>
    <hr>
    @method('PATCH')
    <legend>ACTUALIZAR PERFIL</legend>
    <hr class="linea">
    <div class="form-group">

        <label for="">NOMBRES</label>
        <input id="ape" value="{{$perfil->nombres}}" name="apellidos" type="form-control" id="apellidos" placeholder="Ingrese el nombre">

    </div>
    <br>
    <div class="form-group">

        <label for="">APELLIDOS</label>
        <input id="ape" value="{{$perfil->apellidos}}" name="apellidos" type="form-control" id="apellidos" placeholder="Ingrese el nombre">
    </div>

    <div class="form-group">

        <label for="">SEXO</label>
        <input id="sex" value="{{$perfil->sexo_id}}" name="sexo_id" type="form-control" id="sexo_id" placeholder="Ingrese el nombre">


    </div>

    <div class="form-group">

        <label for="">CARGO</label>
        <input id="car" value="{{$perfil->cargo_id}}" name="cargo_id" type="form-control" id="cargo_id" placeholder="Ingrese el nombre">
    </div>

    <div class="form-group">

        <label for="">ENTIDAD</label>
        <input id="ent" value="{{$perfil->entidad_id}}" name="entidad_id" type="form-control" id="entidad_id" placeholder="Ingrese el nombre">
    </div>

    <div class="form-group">

        <label for="">USER</label>
        <input id="user" value="{{$perfil->user_id}}" name="user_id" type="form-control" id="user_id" placeholder="Ingrese el nombre">
    </div>
    <br>
    <button type="submit" class="btn btn-primary">ACTUALIZAR</button>
</form>
