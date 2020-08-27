<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/inicio', 'PaginasController@index');
Route::get('/contacto', 'PaginasController@contacto');

Route::resource('/telefonos' , 'TelefonoController');
Route::resource('/accesorios' , 'AccesoriosController');



/*

//leer los datos
Route::get('/telefono', function (){

    $elementos = \App\Telefono::all();

    foreach ($elementos as $el){

        echo $el->marca . "</br>";
    }

});

//crear un elemento
Route::get('/insertar', function (){

   \App\Telefono::create(["marca"=>"XPERIA","modelo"=>"ultimo","procesador"=>"intel","almacenamiento"=>"12","memoria_ram"=>"121","foto"=>"121","otros"=>"121"]);


});


//actualizar un elemento
Route::get('/actualizar', function (){

    $elementos = \App\Telefono::find(1);

    $elementos->marca="Act";
    $elementos->modelo="Alcatel";
    $elementos->procesador="Alcatel";
    $elementos->almacenamiento="Alcatel";
    $elementos->memoria_ram="Alcatel";
    $elementos->foto="Alcatel";
    $elementos->otros="Alcatel";

    $elementos->save();

});

//actualizar varios elementos
Route::get('/act', function (){

  \App\Telefono::where("marca","Alcatel")->update(["modelo"=>"Modificado","procesador"=>"intel"]);



});



//eliminar un elemento
Route::get('/delete', function (){

    $elementos = \App\Telefono::find(1);

    $elementos->delete();

});




// php artisan route:list --nos da un listado con las rutas creadas

//ejemplo de como pasar parametros por la url
/*
Route::get('/post/{id}/{nombre}', function ($id,$nombre) {
    return  "El id es" . $id . "y el nombre es" . $nombre;
});
*/

/*
//ejemplo de como llamar al controlador desde las rutas
Route::get('/inicio/{id}', 'EjemploController@index');
*/

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
