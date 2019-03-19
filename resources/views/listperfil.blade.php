<!-- ///////////////////---------------------------------\\\\\\\\\\\\\\\\\\\\\\\\\\
                              LISTA DE PERFILES
    ////////////////////----------------------------------\\\\\\\\\\\\\\\\\\\\\\\\\\ -->


<h1>LISTA DE PERFILES</h1>
<hr>



<button id="vol" type="submit" class="btn btn-primary"><a href="/">MENU PRINCIPAL</button>


<div class="cuadro">
<table class="table table-hover">



<style>



#vol {
        border-radius:  20px ;
        background-color: black;
        color: white;
        width: 120px;
        height: 40px;
        margin-left: 20px;
        margin-top:10px;



    }
    h1{
        font: bold 40px  Agency FB, sans-serif;
    color:yellow;
    text-shadow: 3px 3px 3px black;
    padding: 15px 0px;
    }
    h1{
        margin-left:480px;
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


    /*linea_cuadro*/
    .linea_cuadro{
        margin-left:-574px;
        margin-top:-10px;
        margin-right:-5px;

        border:1px solid black;
    }


    /**/
    th{
        background:teal;
        width:300px;
        color:white;
        padding:25px 15px;
    }




    /*CUADRO */
    .cuadro{
        border:5px solid gray;
        width:850px;
        height:auto;
        margin-left:50px;
        margin-top:50px;
    }

     /*TITULOS DE LISTA*/
    th {
        font:  bold 20px Agency FB, sans-serif;
        margin-left:  40px;



    }

    /* DATOS DE BASE DE DATOS*/
    td {
        font:   20px Agency FB, sans-serif;
        margin-left:  -60px;


    }

    #edit {
        border-radius:  20px ;
        background-color: black;
        color: white;
        width: 120px;
        height: 40px;
        margin-left: 20px;
        margin-top:10px;



    }
    #edit:hover{
        background-color: #434343;
        color: yellow;
    }


    #eli {
        border-radius:  20px ;
        background-color: black;
        color: white;
        width: 120px;
        height: 40px;
        margin-left: 150px;
        margin-top:-40px;



    }
    #eli:hover{
        background-color: #434343;
        color: yellow;
    }

    a{
        text-decoration: none;

        font: bold 15px storytella, sans-serif;
        color: white;
    }

    a:hover{
        background-color: #434343;
        color: yellow;
    }








</style>

<!-- ///////////////////---------------------------------\\\\\\\\\\\\\\\\\\\\\\\\\\
                             LISTADO DE PERFILES
    ////////////////////----------------------------------\\\\\\\\\\\\\\\\\\\\\\\\\\ -->

<thead>

<tr>

	 <th>NOMBRES</th>
     <th>APELLIDOS</th>
     <th>SEXO</th>
     <th>CARGO</th>
     <th>ENTIDAD</th>
     <th>USER</th>
     <th>OPCIONES</th>

	 </tr>

 </thead>

 <tbody>

@foreach ($rs as $item)


	 <tr>

	  <td>{{$item->nombres}}</td>
      <td>{{$item->apellidos}}</td>
      <td>{{$item->sexo_id}}</td>
      <td>{{$item->cargo_id}}</td>
      <td>{{$item->entidad_id}}</td>
      <td>{{$item->user_id}}</td>


            <td>

            <button id="edit" type="submit" class="btn btn-primary"><a href="/perfiles/editarperfil/{{$item->id}}">EDITAR</button>

        <form action="{{url('perfiles', $item->id)}}" method="POST" role="form" id="delete_form_{{$item->id}}">


 @csrf()

@method('DELETE')


<button id="eli" type="submit" class="btn btn-primary"><a href="javascript:{}" onclick="document.getElementById('delete_form_{{$item->id}}').submit();">ELIMINAR</a></button>

 </form>

 <hr class="linea_cuadro">

	 </td>


	</tr>

@endforeach


</tbody>

</table>
