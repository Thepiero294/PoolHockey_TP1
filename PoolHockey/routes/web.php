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
    return redirect('/joueurs');
})->middleware('auth');

Auth::routes();

// Route pour l'affichage du tableau de joueurs
Route::get('/joueurs', 'JoueurController@index')->name('joueurs.index');

// Route pour la mise à jour des données d'un joueur et d'un utilisateur
Route::post('/joueurs/{id}', 'JoueurController@update')->name('joueurs.update');
