<?php

namespace App\Http\Controllers;
use App\Http\Controllers\CommentaireController;
use App\Models\Commentaire;


use Illuminate\Http\Request;

class CommentaireController extends Controller
{

//     public function commentaire($id){
//         $commentaires=Commentaire::find($id);
//         return view ('articles.commentaire', compact('commentaires') );
// }

public function delete_commentaire($id)
{
    $commentaire=Commentaire::find($id);
    $commentaire->delete();
    return redirect('/commentaire/{id}')->with('status','L\'article a bien été supprimé avec succes.');
}
 

    public function ajouter_commentaire_traitement(Request $request)
    {
     
        $request->validate([
            
            'nom_complet_auteur'  => 'required',
            'contenu'  => 'required',
            'date_heure_creation'  => 'required',
            
        ]);

        $commentaire = new Commentaire();
        $commentaire->nom_complet_auteur=$request->nom_complet_auteur;
        $commentaire->contenu=$request->contenu;
        $commentaire->date_heure_creation=$request->date_heure_creation;
        $commentaire->article_id=$request->article_id;
        $commentaire->save();

        return redirect('/')->with('status','L\'commentaire a bien été ajouté avec succes.');
    }


    public function update_commentaire($id){
        $commentaires=commentaire::find($id);
        return view ('articles.updateCommentaire', compact('commentaires') );
}

public function update_commentaire_traitement(Request $request){

    // $request->validate([
        
    //     'nom'  => 'required',
    //     'description'  => 'required',
    //     'date_création'  => 'required',
    //     'photo'  => 'required',
    //     'valider'  => 'required',
    // ]);
 
    $commentaire= Commentaire::find($request->id);
    $commentaire->nom_complet_auteur=$request->nom_complet_auteur;
    $commentaire->contenu=$request->contenu;
    $commentaire->date_heure_creation=$request->date_heure_creation;
    $commentaire->article_id=$request->article_id;
        $commentaire->update();

        return redirect('/commentaire')->with('status', 'L\'commentaire a bien été modifié avec succès.');

}
}

