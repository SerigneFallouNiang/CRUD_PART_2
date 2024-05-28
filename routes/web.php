<?php
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CommentaireController;


use Illuminate\Support\Facades\Route;



Route::get('/', [ArticleController::class, 'index']);
Route::get('/commentaire', [CommentaireController::class, 'commentaire']);


