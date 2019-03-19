<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <style>

        h1{

        font: bold 120px  Agency FB, sans-serif;
        color:yellow;
        text-shadow: 10px 5px 3px black;
        padding: 15px 0px;
        }

        h1{

        text-align:center;
        margin-top:100px;
        }

    /* FORMATO MENU*/

    *{
        margin: 0;
        padding: 0;
    }



     #header{
        margin:auto;
        width:1500px;
        font-family: arial, Helvetica, sans-serif;
        margin-left:80px;
        margin-top:30px;
        

     }

     ul, ol {
        list-style:none;

     }

     .nav li a{
        background-color:  #17202A;
        color:#fff;
        text-decoration:none;
        padding:17px 30px;
        display: block;

     }


     .nav li a:hover{
        background-color: #434343;
        border-radius: 15px 15px;
        color: yellow;

     }

     .nav > li {
        float:left;
     }


     .nav li ul {
        display:none;
        position: absolute;
        min-width: 20px;
     }


     .nav li:hover > ul {
        display:block;
     }


     .nav li ul li {
        position: relative;
     }


     .nav li ul li ul {
        right:-100px;
        top:0px;
     }






    </style>
</head>

<body>
     <div><h1>INCIDENCIAS</h1></div>

        <div id="header">

        <ul class="nav">
            <li><a href="">ENTIDADES</a>
                <ul>
                    <li><a href="/entidades/crearentidad">CREAR NUEVA ENTIDAD</a></li>
                    <li><a href="/entidades/list">LISTA DE ENTIDADES</a></li>

                </ul>
            </li>

            <li><a href="">PERFILES</a>
                <ul>
                <li><a href="/perfiles/welperfil">CREAR NUEVO PERFIL</a></li>
                <li><a href="/perfiles/listperfil">LISTA DE PERFILES</a></li>

                </ul>
            </li>


            <li><a href="">INCIDENCIAS</a>
                <ul>
                <li><a href="/incidencias/crearincidencia">CREAR NUEVA INCIDENCIA</a></li>
                <li><a href="/incidencias/listincidencia">LISTA DE INCIDENCIAS</a></li>

                </ul>
            </li>

            <li><a href="">CARGOS</a>
                <ul>
                <li><a href="/cargos/crearcargo">CREAR NUEVO CARGO</a></li>
                <li><a href="/cargos/listcargo">LISTA DE CARGOS</a></li>

                </ul>
            </li>

            <li><a href="">MODULOS</a>
                <ul>
                <li><a href="/modulos/crearmodulo">CREAR NUEVO MODULO</a></li>
                <li><a href="/modulos/listmodulo">LISTA DE MODULOS</a></li>

                </ul>
            </li>

            <li><a href="">SEXOS</a>
                <ul>
                <li><a href="/sexos/crearsexo">CREAR NUEVO SEXO</a></li>
                <li><a href="/sexos/listsexo">LISTA DE SEXOS</a></li>

                </ul>
            </li>


            <li><a href="">USERS</a>
                <ul>
                <li><a href="/users/crearuser">CREAR USERS</a></li>
                <li><a href="/users/listaruser">LISTA DE USERS</a></li>

                </ul>
            </li>


                <li><a href="">TIPO DE INCIDENCIA</a>
                <ul>
                <li><a href="/tipo_incidencias/creartipo">CREAR TIPO DE INCIDENCIA</a></li>
                <li><a href="/tipo_incidencias/listtipo">LISTA TIPOS DE INCIDENCIA</a></li>

                </ul>
            </li>

        </ul>
        </div>




</body>
</html>
