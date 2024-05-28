<?php

namespace App\Http\Controllers;
use App\Http\Controllers\CommentaireController;
use App\Models\Commentaire;


use Illuminate\Http\Request;

class CommentaireController extends Controller
{
 
    public function commentaire(){
        $commentaires = Commentaire::all();
        return view ('articles.commentaire' , compact('commentaires'));
    }
}

