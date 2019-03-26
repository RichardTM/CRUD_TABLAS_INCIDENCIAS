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

<select name="sexo_id" class="form-control" required="required">
    <option value="">seleccione</option>
    @foreach($sexos as $item)
    <option value="{{$item->id}}">{{$item->sexo}}</option>
    @endforeach
</select>
</div>

<div class="form-group">

    <label for="">CARGO</label>
<select name="cargo_id" class="form-control" required="required">
    <option value="">seleccione</option>
    @foreach($cargos as $item)
    <option value="{{$item->id}}">{{$item->cargo}}</option>
    @endforeach
</select>
</div>


<div class="form-group">

    <label for="">ENTIDAD</label>
 <!--  <input  id="ent" name="entidad_id" type="text" class="form-control" id="entidad_id"  placeholder="Ingrese la Entidad">   -->


<select name="entidad_id" class="form-control" required="required">
    <option value="">seleccione</option>
    @foreach($entidades as $item)
    <option value="{{$item->id}}">{{$item->entidad}}</option>
    @endforeach
</select>
</div>



<div class="form-group">

    <label for="">USER</label>
<select name="user_id" class="form-control" required="required">
    <option value="">seleccione</option>
    @foreach($users as $item)
    <option value="{{$item->id}}">{{$item->name}}</option>
    @endforeach
</select>
</div>



 <button type="submit" class="btn btn-primary">GUARDAR</button>
</form>
