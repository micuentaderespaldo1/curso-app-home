<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CrudController;

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


Route::get("/", [CrudController::class, "index"])->name("crud.index");
Route::post("/create-product", [CrudController::class, "create"])->name("crud.create");
Route::post("/update-product", [CrudController::class, "update"])->name("crud.update");
Route::get("/delete-product-{id}", [CrudController::class, "delete"])->name("crud.delete");
/*Route::get('/', function () {
    return view('welcome');
   
});
Route::get('/catalogos', function(){
    return 'Esta es la sección de catalogos';
});
Route::get('/catalogos/{name_cat}', function($name_cat){
    return 'usted ha accesado al catalogo de: <b>'.$name_cat.'</b>';

});
Route::get('/ofertas', function(){
    return 'Bienvenido a la sección de ofertas';
});
Route::get('/ofertas/{name_ofer}/{categoria?}', function($name_ofer, $categoria=null){
    if($categoria){
        return 'Usted esta en el catalogo:'.$name_ofer. ', de la categoria de '. $categoria;
    }else{
        return 'Usted esta en el catalogo:'.$name_ofer;
    }

});*/