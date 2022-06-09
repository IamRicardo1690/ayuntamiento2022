<?php

use Illuminate\Support\Facades\Auth;
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


//ESTA EL LA RUTA PRINCIPAL
Route::get('/', function () {
    alert()->success('Success Message', 'Optional Title');
    return view('principal.principal'); //Ruta de pagina de inicio
    //return view('welcome');
    //return view('catastro/auth.login');
});

/**************************EMPIEZA RUTAS PARA CATASTRO_MUNICIPAL***********************/
Route::get('/catastro', function () {
    alert()->success('Success Message', 'Optional Title');
    return view('Direccion_Catastro/home.inicio'); //Ruta de pagina de inicio
    //return view('welcome');
    //return view('catastro/auth.login');
});

Auth::routes(['register'=>false,'reset'=>false]); //['register'=>false] desactiva el boton registro del menu
//Auth::routes();


Route::get('/agendacatastros', [App\Http\Controllers\AgendacatastrosController::class, 'index']);

Route::get('/agendacatastros/mostrar', [App\Http\Controllers\AgendacatastrosController::class, 'show']);

Route::post('/agendacatastros/agregar', [App\Http\Controllers\AgendacatastrosController::class, 'store']);



Route::get('/usuario', 'HomeController@index')->name('home');


//rutas de vistas del administrador
/*Route::get('solicitudes' , function(){
    alert()->success('Success Message', 'Optional Title');
    return view ('Direccion_Catastro/solicitudes.solicitud');
});*/


Route::get('/solicitudes' , 'SolicitudesController@index');
Route::get('/traslado' , 'TrasladoController@index');
Route::get('/plano' , 'PlanoController@index');
Route::get('/valor' , 'ValorController@index');
Route::get('/verificacion' , 'VerificacionController@index');
Route::get('/localizacion' , 'LocalizacionController@index');
Route::get('/satelital' , 'SatelitalController@index');
Route::get('/manifestacion' , 'ManifestacionController@index');
//aui termina rutas para vistas del usuario
Route::post('/solicitudes' , 'SolicitudesController@store'); //ruta de solicitides que genera el usuario

Route::get('/vista' , 'CalendarioCitasController@index'); //ruta vista del calendario

Route::get('/imprimircita/{nombre_ciudadano}/{id_ciudadano}' , 'ImprimircitaController@imprimircita'); //ruta para generar pdf

//Route::get('/imprimircita/{id_ciudadano}' , 'ImprimircitaController@imprimircita')->name('imprimircita');


Route::group(['middleware' => ['role:cliente']], function () {
    //rutas accesibles solo para clientes
});

Route::get('/administrador' , function (){ //ruta para el administrador
    return view('Direccion_Catastro/administrador.admin');
}); // <--- este es el nombre que busca el controlador.

Route::get('/usuario', function (){ //ruta para el usuario
    return view('Direccion_Catastro/usuario.usuario');
});
//rutas de busqueda 
Route::get('localizacion','LocalizacionController@index')->name('localizacion');
Route::get('valor','ValorController@index')->name('valor');
Route::get('verficacion','VerficacionController@index')->name('verificacion');
Route::get('traslado','TrasladoController@index')->name('traslado');
Route::get('satelital','SatelitalController@index')->name('satelital');
Route::get('plano','PlanoController@index')->name('plano');
Route::get('manifestacion','ManifestacionController@index')->name('manifestacion');
//aqui termina rutas de busqueda
/**************************TERMINA RUTAS PARA CATASTRO_MUNICIPAL***********************/






/**************************EMPIEZA RUTAS PARA DESARROLLO ECONOMICO***********************/
Route::get('D_economico', function () {
    alert()->success('Success Message', 'Optional Title');
    return view('Desarrollo_Economico/home.inicio'); //Ruta de pagina de inicio
});

/**************************TERMINAS RUTAS PARA DESARROLLO ECONOMICO***********************/




/**************************EMPIEZA RUTAS PARA DIRECCION DE TURISMO***********************/
Route::get('D_turismo', function () {
    alert()->success('Success Message', 'Optional Title');
    return view('D_turismo/home.index'); //Ruta de pagina de inicio
});

/**************************TERMINAS RUTAS PARA DIRECCION DE TURISMO***********************/