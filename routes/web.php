<?php

use App\Http\Controllers\website\GestionController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormationController;
use App\Http\Controllers\ContactController;


Route::get('/', [GestionController::class, 'bienvenues'])->name('bienvenue');

Route::get('/services', [GestionController::class, 'services'])->name('services');

Route::get('/contact', [GestionController::class, 'contact'])->name('contact');


Route::post('/inscription', [FormationController::class, 'envoyerInscription'])->name('inscription.envoyer');


Route::post('/contact/envoyer', [ContactController::class, 'envoyer'])->name('contact.envoyer');
