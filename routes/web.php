<?php

use App\Http\Controllers\AccueilController;
use App\Http\Controllers\CategorieController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProduitController;
use App\Http\Controllers\TypeController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//page d'accueil

Route::get(
    '/',
    [WelcomeController::class, 'index']
)->name('welcome');

// Route::get('/', [WelcomeController::class, 'last'])->name('accueil');

// produits
Route::get('/produits', [ProduitController::class, 'index'])->name('produits');

//creation d'un produit
Route::get('/produits/create', [ProduitController::class, 'create'])->name('produits.create');
Route::post('/produits/create', [ProduitController::class, 'store'])->name('produits.store');

//modification d'un produit
Route::get('/produits/edit/{id}', [ProduitController::class, 'edit'])->name('produits.edit');
Route::put('/produits/edit/{id}', [ProduitController::class, 'update'])->name('produits.update');

//supprimer un produit
Route::delete('/produits/delete/{id}', [ProduitController::class, 'destroy'])->name(('produits.destroy'));


//categorie
Route::get('/categories/create', [CategorieController::class, 'create'])->name('categories.create');
Route::post('/categories/create', [CategorieController::class, 'store'])->name('categories.store');

//modification de la categorie
Route::get('/categories/edit/{id}', [CategorieController::class, 'edit'])->name('categories.edit');
Route::put('/categories/edit/{id}', [CategorieController::class, 'update'])->name('categories.update');

//supprimer une categorie
Route::delete('/categories/delete/{id}', [CategorieController::class, 'destroy'])->name(('categories.destroy'));

//tableau de bord
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');




// Afficher un produit en detail
Route::get('/produits/show/{id}/{categorie_id}', [ProduitController::class, 'show'])->name('produit.show');


//Afficher les produits part categorie
Route::get('/type/{id}', [TypeController::class, 'type'])->name('type');
