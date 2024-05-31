
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD IN LARAVEL 10</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<style>
    .navbar-nav{
    width: 100%;
}

@media(min-width:568px){
    .end{
        margin-left: auto;
    }
}

@media(max-width:768px){
    #post{
        width: 100%;
    }
}
#clicked{
    padding-top: 1px;
    padding-bottom: 1px;
    text-align: center;
    width: 100%;
    background-color: #ecb21f;
    border-color: #a88734 #9c7e31 #846a29;
    color: black;
    border-width: 1px;
    border-style: solid;
    border-radius: 13px; 
}

#profile{
    background-color: unset;
    
} 

#post{
    margin: 10px;
    padding: 6px;
    padding-top: 2px;
    padding-bottom: 2px;
    text-align: center;
    background-color: #ecb21f;
    border-color: #a88734 #9c7e31 #846a29;
    color: black;
    border-width: 1px;
    border-style: solid;
    border-radius: 13px;
    width: 50%;
}

body{
    background-color: white;
}

#nav-items li a,#profile{
    text-decoration: none;
    color: rgb(224, 219, 219);
    background-color: black;
}


.comments{
    margin-top: 5%;
    margin-left: 20px;
}

.darker{
    border: 1px solid #ecb21f;
    background-color: black;
    float: right;
    border-radius: 5px;
    padding-left: 40px;
    padding-right: 30px;
    padding-top: 10px;
}

.comment{
    border: 1px solid black;
    background-color: #46127e;
    float: left;
    border-radius: 5px;
    padding-left: 40px;
    padding-right: 30px;
    padding-top: 10px;
    
}
.comment h4,.comment span,.darker h4,.darker span{
    display: inline;
}

.comment p,.comment span,.darker p,.darker span{
    color: rgb(184, 183, 183);
}

h1,h4{
    color: white;
    font-weight: bold;
}
label{
    color: rgb(212, 208, 208);
}

#align-form{
    margin-top: 20px;
}
.form-group p a{
    color: white;
}

#checkbx{
    background-color: black;
}

#darker img{
    margin-right: 15px;
    position: static;
}

.form-group input,.form-group textarea{
    background-color: white;
    border: 1px solid rgba(16, 46, 46, 1);
    border-radius: 12px;
}

form{
    border: 1px solid rgba(16, 46, 46, 1);
    background-color: #46127e;
    border-radius: 5px;
    padding: 20px;
 }</style>  
</head>
  <body>

  <nav class="navbar navbar-expand-sm navbar-dark">

</nav>
<!-- Main Body -->
<section>
   
    <div class="container">
        <a href="/" class="btn btn-info">Retour</a>

        <div class="row">
            <div class="col-sm-5 col-md-6 col-12 pb-4">
                <h1>Commentaires</h1>
                @foreach($article->commentaires  as $commentaire)
                <div class="comment mt-4 text-justify float-left">
                    <img src="https://i.imgur.com/yTFUilP.jpg" alt="" class="rounded-circle" width="40" height="40">
                    <h4>{{$commentaire->nom_complet_auteur}}</h4>
                    <span>- 20 October, 2018</span>
                    <br>
                    <p>{{$commentaire->contenu}}</p>
                    <a href="/update-commentaire/{{$commentaire->id}}" class="btn btn-info">Modifier</a>
                <a onclick="return confirm('Confirmer la suppression')" href="/delete-commentaire/{{$commentaire->id}}" class="btn btn-danger">Supprimer</a>
                </div>
                


                @endforeach
               
 
               
            </div>
            <div class="col-lg-4 col-md-5 col-sm-4 offset-md-1 offset-sm-1 col-12 mt-4">
                <form id="algin-form" action="/ajouterCommentaire/traitement" method="POST" class="form-group" enctype="multipart/form-data">
                    @csrf
                    @if (session('status'))
                    <div class="alert alert-succes">
                      {{session('status')}}
                    </div>
                @endif
      
                    <ul>
                      @foreach ($errors->all() as $error)
                      <li class="alert alert-danger">{{$error}}</li>
                          
                      @endforeach
                    </ul>
                    <div class="form-group">
                        <h4>Lessez nous un message !</h4>
                        <label for="message">Message</label>
                        <textarea name="contenu" id=""msg cols="30" rows="5" class="form-control" style="background-color: white;" name="contenu"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="name">Nom</label>
                        <input type="text" name="nom_complet_auteur" id="fullname" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="email">Date</label>
                        <input type="date" name="date_heure_creation" id="email" class="form-control">
                    </div>
                    <div class="form-group">
                        <input type="text" name="article_id" style="display: none;"  value="{{$article->id}}">

                    </div>
                    <br><br>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">AJOUTER UN COMMENTAIRE</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
</section>

  