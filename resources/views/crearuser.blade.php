<!-- ///////////////////---------------------------------\\\\\\\\\\\\\\\\\\\\\\\\\\
                             GUARDAR NUEVO USER
    ////////////////////----------------------------------\\\\\\\\\\\\\\\\\\\\\\\\\\ -->


    <form action="/users" method="POST" role="form">

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
        margin-left:40px;
        margin-top:50px;
    }

    /*DESCRIPCION*/
    #des{
        border: 2px solid gray;
        width:24%;
        height:30px;
        margin-left:52px;
        margin-top:20px;
    }

    /*MODULO*/
    #mod{
        border: 2px solid gray;
        width:24%;
        height:30px;
        margin-left:15px;
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






@csrf()
<h1>TABLA USERS</h1>
<hr>

<legend>GUARDAR NUEVO USER</legend>
<hr class="linea">
 <div class="form-group">

    <label for="">NOMBRES</label>
    <input id="tit" name="name" type="text" class="form-control" id="name"  placeholder="Ingrese el Nombre">
</div>


<div class="form-group">

    <label for="">CORREO</label>
    <input id="des" name="email" type="text" class="form-control" id="email"  placeholder="Ingrese el Correo">
</div>


<div class="form-group">

    <label for="">CONTRASEÑA</label>
    <input id="mod"name="password" type="text" class="form-control" id="password"  placeholder="Ingrese la Contraseña">
</div>




 <button type="submit" class="btn btn-primary">GUARDAR</button>
</form>
