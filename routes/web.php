<?php
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CommentaireController;


use Illuminate\Support\Facades\Route;

Route::get('/ajouter', [ArticleController::class, 'ajouter_article']);
Route::post('/ajouter/traitement', [ArticleController::class, 'ajouter_article_traitement']);

Route::get('/delete-article/{id}', [ArticleController::class, 'delete_article']);


Route::get('/', [ArticleController::class, 'index']);
Route::get('/commentaire', [CommentaireController::class, 'commentaire']);


