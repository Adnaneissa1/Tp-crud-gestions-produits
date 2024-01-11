<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\WelcomeController;
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



/* Route::get('/stagiare/{nom}', function ($nom='oumaima') {
    return 'le nom du stagiare '.$nom;
});
Route::get('/classe/{nom}/stagiaire/{filiere?}', function ($nom,$filiere="dev") {
    return 'le nom du stagiare '.$nom . ' appartient à la classe '. $filiere;
}); */
               
/* Route::get('/stagiaire/{id}', function ($id) {
    return 'le nom du stagiare '.$id;
})->where('id',[1-5]); */

/* Route::get('/', function () {
    return 'le nom du stagiare ';
})->name('home');  */


/* $url=route('profile',['id'=>1]);
return redirect()->$url; */

/*  Route::get('/stagiaire/{id}', function ($id) {
    return 'le nom du stagiare '.$id;
})->name('profile'); */

// Route::get('/', 'App\Http\Controllers\WelcomeController@index');


/* Route::resource('photos','nameSpace/PhtotController')
->only([])->except([])->missing(return redirect()->route(photos.index));
Route::apiResource('photos','nameSpace/PhtotController'); */

/* Route::resource('class.stagiaire','')=Route::resource('class/{class}/stagiaire/{dtg}','')
=>relation intérmidiate , resource imbriqué */

// modification de nom de route ->name(['create'=>'photos.build']);
// modification de paramétre ->parametres(['users'=>'admin_user']);
// évaluer les itinérairs des ressources ->scoped(['comment'=>'slug']);
/*  public function boot():void{
    Route::resourceVerbs([
        'create'=>'creer',
        'edit'=>'editer'
    ])
} */
// l'ordre de les routes important ;
// Route::get('/photos/popular',nameSpace/controller@method) before route de ressource;
// aprés route de ressource ;
// ------------------------------------------
// Group dyal les routes ;
// Route::fallback(function(){})
/* 
 formulaire de html 
 @method('PUT')
 @crsf  */

// php artisan route:cache,php artisan route:clear*;

/* Route::get('/stagiaire/majorant','App\Http\Controllers\PhotoController@majorant');
Route::resource('/stagiaire','App\Http\Controllers\PhotoController'); */

// Route::resource('/stagiaire', 'App\Http\Controllers\FormController');

Route::resource('/products', 'App\Http\Controllers\ProductController');





















 

















