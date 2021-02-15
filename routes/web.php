<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\etudiantController;
use App\Http\Controllers\administrationController;
use App\Http\Controllers\reclamationController;
/*
Route::get('/', function () {
    return view('bienvenue');
});

Route::get('/loginEtudiant', [etudiantController::class, 'return_etudiant']);

Route::post('/loginEtudiant', [etudiantController::class, 'info_etudiant']);
////
Route::get('/loginAdministration', [administrationController::class, 'return_administration']);

Route::post('/loginAdministration', [administrationController::class, 'info_administration']);
////
//Route::get('/jereclame', [etudiantController::class, 'return_reclame']);

Route::post('/etudiant', [etudiantController::class, 'saveReclamation']);

//Route::post('/jereclame', [etudiantController::class, 'saveReclamation']);
////
Route::get('/imprimer', [administrationController::class, 'imprimer']);

Route::get('/imprimer3', [administrationController::class, 'imprimer3']);

Route::get('/imprimer4', [administrationController::class, 'imprimer4']);

Route::delete('/supprimer{id}', [etudiantController::class, ('destroy')]);

//Route::resource('supprimer', 'destroy');
