<!-- ///////////////////---------------------------------\\\\\\\\\\\\\\\\\\\\\\\\\\
                             GUARDAR NUEVO PERFIL
    ////////////////////----------------------------------\\\\\\\\\\\\\\\\\\\\\\\\\\ -->

<form action="/perfiles" method="POST" role="form">




    @csrf()

    <h1>TABLA PERFILES</h1>


    <!--<button id="vol" type="submit" class="btn btn-primary"><a href="/">MENU PRINCIPAL</button>   -->

    <legend>GUARDAR NUEVO PERFIL</legend>
    <!-- <hr class="linea">-->
    <div class="form-group">

        @component('componentes.text', ['name' => 'nombres', 'label' => 'NOMBRES', 'placeholder' =>'Ingrese el Nombre'])
        @endcomponent
    </div>
    <br>

    <div class="form-group">

        @component('componentes.text', ['name' => 'apellidos', 'label' => 'APELLIDOS', 'placeholder' =>'Ingrese el Apellido'])
        @endcomponent
    </div>


    <div class="form-group">
        @component('componentes.select', ['name'=>'sexo_id', 'data' =>$sexos, 'tag'=> 'sexo', 'label'=>'SEXO' ])
        @endcomponent

    </div>


    <div class="form-group">

        @component('componentes.select', ['name'=>'cargo_id', 'data' =>$cargos, 'tag'=> 'cargo', 'label'=>'CARGO' ])
        @endcomponent
    </div>


    <div class="form-group">


        @component('componentes.select', ['name'=>'entidad_id', 'data' =>$entidades, 'tag'=> 'entidad', 'label'=>'ENTIDAD' ])
        @endcomponent


    </div>



    <div class="form-group">


        @component('componentes.select', ['name'=>'user_id', 'data' =>$users, 'tag'=> 'name', 'label'=>'USUARIO' ])
        @endcomponent
    </div>



    <button type="submit" class="btn btn-primary">GUARDAR</button>
</form>
