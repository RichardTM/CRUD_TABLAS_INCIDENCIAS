<!-- ///////////////////---------------------------------\\\\\\\\\\\\\\\\\\\\\\\\\\
                             GUARDAR NUEVO PERFIL
    ////////////////////----------------------------------\\\\\\\\\\\\\\\\\\\\\\\\\\ -->

<form action="/perfiles" method="POST" role="form">

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
    /* NONBRES*/
    #nom{
        border: 2px solid gray;
        width:24%;
        height:30px;
        margin-left:19px;
        margin-top:50px;
    }

    /*APELLIDOS*/
    #ape{
        border: 2px solid gray;
        width:24%;
        height:30px;
        margin-left:10px;z
        margin-top:20px;
    }

    /*SEXO*/
    #sex{
        border: 2px solid gray;
        width:24%;
        height:30px;
        margin-left:47px;
        margin-top:20px;
    }


     /*CARGO*/
     #car{
        border: 2px solid gray;
        width:24%;
        height:30px;
        margin-left:35px;
        margin-top:20px;
    }


      /*ENTIDAD*/
      #ent{
        border: 2px solid gray;
        width:24%;
        height:30px;
        margin-left:24px;
        margin-top:20px;
    }

     /*USERS*/
     #user{
        border: 2px solid gray;
        width:24%;
        height:30px;
        margin-left:43px;
        margin-top:20px;
    }

    button{
        border-radius:  20px ;
        background-color: black;
        color: white;
        width: 200px;
        height: 40px;
        margin-left: 260px;
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


    #vol {
        border-radius:  20px ;
        background-color: black;
        color: white;
        width: 120px;
        height: 40px;
        margin-left: 20px;
        margin-top:10px;



    }

</style>


@csrf()

<h1>TABLA PERFILES</h1>
<hr>


<button id="vol" type="submit" class="btn btn-primary"><a href="/">MENU PRINCIPAL</button>

<legend>GUARDAR NUEVO PERFIL</legend>
<hr class="linea">
 <div class="form-group">

    <label for="">NOMBRES</label>
    <input  id="nom"name="nombres" type="text" class="form-control" id="nombres"  placeholder="Ingrese el Nombre">
</div>
    <br>

<div class="form-group">

    <label for="">APELLIDOS</label>
    <input  id="ape" name="apellidos" type="text" class="form-control" id="apellidos"  placeholder="Ingrese el Apellido">
</div>


<div class="form-group">

    <label for="">SEXO</label>
    <input id="sex" name="sexo_id" type="text" class="form-control" id="sexo_id"  placeholder="Ingrese el Sexo">
</div>


<div class="form-group">

    <label for="">CARGO</label>
    <input  id="car" name="cargo_id" type="text" class="form-control" id="cargo_id"  placeholder="Ingrese el Cargo">
</div>


<div class="form-group">

    <label for="">ENTIDAD</label>
    <input  id="ent" name="entidad_id" type="text" class="form-control" id="entidad_id"  placeholder="Ingrese la Entidad">
</div>



<div class="form-group">

    <label for="">USER</label>
    <input  id="user" name="user_id" type="text" class="form-control" id="user_id"  placeholder="Ingrese el User">
</div>



 <button type="submit" class="btn btn-primary">GUARDAR</button>
</form>
