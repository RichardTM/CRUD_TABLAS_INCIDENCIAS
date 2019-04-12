<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/





Route::get('/', function () {
    return view('welcome');
});



Auth::routes();

route::get('entidades/edit/{entidad}', 'EntidadController@edit');
route::get('entidades/list', 'EntidadController@list');
Route::get('entidades/crearentidad', function () {
    return view('crearentidad');
});
route::get('entidades', 'EntidadController@index');
route::get('entidades/{id}', 'EntidadController@show');
route::post('entidades', 'EntidadController@store');
route::patch('entidades/{entidad}', 'EntidadController@update');
route::delete('entidades/{entidad}', 'EntidadController@destroy');



/* ------------------------------------------------------------------------------------
*                               RUTAS  PERFILES                                       *
--------------------------------------------------------------------------------------*/



Auth::routes();
//editar datos
route::get('perfiles/editarperfil/{perfil}', 'PerfilController@edit');
//listar los datos
route::get('perfiles/listperfil', 'PerfilController@listperfil');
route::get('perfiles/welperfil', 'PerfilController@create');
route::get('perfiles', 'PerfilController@index'); // inicio
route::get('perfiles/{id}', 'PerfilController@show'); //mostrar vista de datos
route::post('perfiles', 'PerfilController@store'); //guardar datos
route::patch('perfiles/{perfil}', 'PerfilController@update'); //actualizar datos
route::delete('perfiles/{perfil}', 'PerfilController@destroy'); //eliminar datos





/* ------------------------------------------------------------------------------------------
*                              RUTAS  INCIDENCIAS                                           *
--------------------------------------------------------------------------------------------*/



Auth::routes();
//editar datos
route::get('incidencias/editarincidencia/{incidencia}', 'IncidenciaController@edit');
//listar los datos
route::get('incidencias/listincidencia', 'IncidenciaController@listincidencia');
route::get('incidencias/crearincidencia', 'IncidenciaController@create');
route::get('incidencias', 'IncidenciaController@index'); // inicio
route::get('incidencias/{id}', 'IncidenciaController@show'); //mostrar vista de datos
route::post('incidencias', 'IncidenciaController@store'); //guardar datos
route::patch('incidencias/{incidencia}', 'IncidenciaController@update'); //actualizar datos
route::delete('incidencias/{incidencia}', 'IncidenciaController@destroy'); //eliminar datos



/* ------------------------------------------------------------------------------------
*                               RUTAS  CARGOS                                       *
--------------------------------------------------------------------------------------*/




Auth::routes();
//editar datos
route::get('cargos/editarcargo/{cargo}', 'CargoController@edit');
//listar los datos
route::get('cargos/listcargo', 'CargoController@listcargo');
route::get('cargos/crearcargo', function(){
    return view('crearcargo');
});
route::get('cargos', 'CargoController@index'); // inicio
route::get('cargos/{id}', 'CargoController@show'); //mostrar vista de datos
route::post('cargos', 'CargoController@store'); //guardar datos
route::patch('cargos/{cargo}', 'CargoController@update'); //actualizar datos
route::delete('cargos/{cargo}', 'CargoController@destroy'); //eliminar datos






/* ------------------------------------------------------------------------------------
*                               RUTAS  MODULOS                                        *
--------------------------------------------------------------------------------------*/



Auth::routes();
//editar datos
route::get('modulos/editarmodulo/{modulo}', 'ModuloController@edit');
//listar los datos
route::get('modulos/listmodulo', 'ModuloController@listmodulo');
route::get('modulos/crearmodulo', function(){
    return view('crearmodulo');
 });
route::get('modulos', 'ModuloController@index'); // inicio
route::get('modulos/{id}', 'ModuloController@show'); //mostrar vista de datos
route::post('modulos', 'ModuloController@store'); //guardar datos
route::patch('modulos/{modulo}', 'ModuloController@update'); //actualizar datos
route::delete('modulos/{modulo}', 'ModuloController@destroy'); //eliminar datos




/* ------------------------------------------------------------------------------------
*                               RUTAS  SEXOS                                        *
--------------------------------------------------------------------------------------*/




Auth::routes();
//editar datos
route::get('sexos/editarsexo/{sexo}', 'SexoController@edit');
//listar los datos
route::get('sexos/listsexo', 'SexoController@listsexo');
route::get('sexos/crearsexo', function(){
    return view('crearsexo');
 });
route::get('sexos', 'SexoController@index'); // inicio
route::get('sexos/{id}', 'SexoController@show'); //mostrar vista de datos
route::post('sexos', 'SexoController@store'); //guardar datos
route::patch('sexos/{sexo}', 'SexoController@update'); //actualizar datos
route::delete('sexos/{sexo}', 'SexoController@destroy'); //eliminar datos







/* ------------------------------------------------------------------------------------
*                               RUTAS  USERS                                        *
--------------------------------------------------------------------------------------*/




Auth::routes();
//editar datos
route::get('users/editaruser/{user}', 'UserController@edit');
//listar los datos
route::get('users/listaruser', 'UserController@listuser');
route::get('users/crearuser', function(){
    return view('crearuser');
 });
route::get('users', 'UserController@index'); // inicio
route::get('users/{id}', 'UserController@show'); //mostrar vista de datos
route::post('users', 'UserController@store'); //guardar datos
route::patch('users/{user}', 'UserController@update'); //actualizar datos
route::delete('users/{user}', 'UserController@destroy'); //eliminar datos


/* ------------------------------------------------------------------------------------
*                               RUTAS  TIPO INCIDENCIAS                               *
--------------------------------------------------------------------------------------*/




Auth::routes();
//editar datos
route::get('tipo_incidencias/editartipo/{tipoIncidencia}', 'TipoIncidenciaController@edit');
//listar los datos
route::get('tipo_incidencias/listtipo', 'TipoIncidenciaController@listtipo');
route::get('tipo_incidencias/creartipo', function(){
    return view('creartipo');
 });
route::get('tipo_incidencias', 'TipoIncidenciaController@index'); // inicio
   route::get('tipo_incidencias/{id}', 'TipoIncidenciaController@show'); //mostrar vista de datos
route::post('tipo_incidencias', 'TipoIncidenciaController@store'); //guardar datos
route::patch('tipo_incidencias/{tipoIncidencia}', 'TipoIncidenciaController@update'); //actualizar datos
route::delete('tipo_incidencias/{tipoIncidencia}', 'TipoIncidenciaController@destroy'); //eliminar datos




Route::resource('roles', 'RolesController'); // rutas de recursos de roles
Route::resource('permisos', 'PermisosController'); //rutas de recursos de permisos
