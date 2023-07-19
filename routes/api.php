<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

// Récupérer la liste des produits
Route::get('/products', [ProductController::class, 'index']);

// Créer un nouveau produit
Route::post('/products', [ProductController::class, 'create']);

// Récupérer un produit spécifique par son identifiant
Route::get('/product/{id}', [ProductController::class, 'show']);

// Mettre à jour un produit existant
Route::put('/product/{id}', [ProductController::class, 'update']);

// Supprimer un produit
Route::delete('/product/{id}', [ProductController::class, 'destroy']);

// Rechercher un produit
Route::get('/products/search', [ProductController::class, 'search']);

// Exemple de route protégée par authentification Sanctum
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
