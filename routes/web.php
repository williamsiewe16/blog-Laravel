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


Route::get('/','controller1@getForm')->name("accueil");
Route::get('/add','controller1@getFormAdd')->name("formulaire");
Route::post('/add','controller1@postFormAdd')->name("ajout");

Route::get('/{n}',function($n){
    return redirect()->route('accueil');
});

/*Route::get('/add', function () {
    return view('ajouter');
})->name("add");*/

/*Route::get('etage/{id?}', function ($id = 0) {
    return "nous sommes à l'étage ".$id;
})->where('id','[1-3]');

Route::redirect('/autres','/sale chat');

Route::get('user/profile', function () {
    return redirect("/");
})->name('profile');*/
