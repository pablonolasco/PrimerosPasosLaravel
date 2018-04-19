<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');//vista creada en la carpeta de resources->view
});

Route::any('/hola-mundo',function (){
    # code...any cualquier tipo, get, post, put
    return ('Esta es una ruta en Laravel');
});
Route::match(['get','post'],'contact',function (){
    # code...indicar que acepta dos tipos de envio mediante un arreglo
    return view ('contacto');
});
Route::get('carrito-compras/{nombre?}/{edad?}',function ($nombre="Dato defecto",$edad=27){
    # code...paso de parametro opcional nombre?, sin el signo ? es obligatorio el parametro
    return view ('carrito',array("nombre"=>$nombre,"edad"=>$edad));
})->where([
    'nombre'=>'[A-Za-z]+',
    'edad'=>'[0-9]+'
]);

Route::get('detalle/{nombre?}/{edad?}', function ($nombre,$edad) {
    //retornan vista con los paramateros mediante los metodos view
    return view('Detalle.detalle')
    ->with('nombre',$nombre)
    ->with('edad',$edad);
})->where([
    'nombre'=>'[A-Za-z]+',
    'edad'=>'[0-9]+'
]);

Route::post('/hola-mundo',function (){
    # code...
    return ('Esta es una ruta en Laravel avanzada por post');
});
