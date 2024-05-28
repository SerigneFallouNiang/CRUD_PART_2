<?php

namespace App\Http\Controllers;
use App\Models\Article;
use App\Http\Controllers\ArticleController;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index(){
        $articles = Article::all();
        return view ('articles.index' , compact('articles'));
    }
    
    public function detail($id){
        $article=Article::find($id);        
        return view ('articles.detail' , compact('article'));
    }

    public function ajouter_article()
    {
        return view('articles.ajouter');
    }

    public function ajouter_article_traitement(Request $request)
    {
     
        $request->validate([
            
            'nom'  => 'required',
            'description'  => 'required',
            'date_création'  => 'required',
            'photo'  => 'required',
            'valider'  => 'required',
        ]);

        $article = new Article();
        $article->nom=$request->nom;
        $article->description=$request->description;
        $article->date_création=$request->date_création;
        $article->photo=$request->photo;
        $article->valider= $request->valider;


        $article->save();

        return redirect('/')->with('status','L\'article a bien été ajouté avec succes.');
    }

    public function delete_article($id)
    {
        $article=Article::find($id);
        $article->delete();
        return redirect('/')->with('status','L\'article a bien été supprimé avec succes.');
    }

    public function update_article($id){
        $articles=Article::find($id);
        return view ('articles.update', compact('articles') );
}

public function update_article_traitement(Request $request){

    $request->validate([
        
        'nom'  => 'required',
        'description'  => 'required',
        'date_création'  => 'required',
        'photo'  => 'required',
        'valider'  => 'required',
    ]);
 
    $article= Article::find($request->id);
        $article->nom = $request->nom;
        $article->description = $request->description;
        $article->date_création = $request->date_création;
        $article->photo = $request->photo;
        $article->valider= $request->valider;

        $article->update();

        return redirect('/')->with('status', 'L\'article a bien été modifié avec succès.');

}
}


