<?php
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CommentaireController;


use Illuminate\Support\Facades\Route;

Route::get('/ajouter', [ArticleController::class, 'ajouter_article']);
Route::post('/ajouter/traitement', [ArticleController::class, 'ajouter_article_traitement']);

Route::get('/delete-article/{id}', [ArticleController::class, 'delete_article']);

Route::get('/', [ArticleController::class, 'index']);

Route::get('/update-article/{id}', [ArticleController::class, 'update_article']);
Route::post('/update/traitement', [ArticleController::class, 'update_article_traitement']);

Route::get('/detail/{id}', [ArticleController::class, 'detail']);








Route::get('/commentaire/{id}', [ArticleController::class, 'commentaire']);
Route::post('/ajouterCommentaire/traitement', [CommentaireController::class, 'ajouter_commentaire_traitement']);


Route::get('/update-commentaire/{id}', [CommentaireController::class, 'update_commentaire']);
Route::post('/updateCommentaire/traitement', [CommentaireController::class, 'update_commentaire_traitement']);

Route::get('/delete-commentaire/{id}', [CommentaireController::class, 'delete_commentaire']);
