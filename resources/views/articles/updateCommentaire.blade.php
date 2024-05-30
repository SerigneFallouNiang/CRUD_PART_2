
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD IN LARAVEL 10</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>

  <nav class="navbar navbar-expand-sm navbar-dark">
    <img src="https://i.imgur.com/CFpa3nK.jpg" width="20" height="20" class="d-inline-block align-top rounded-circle" alt=""> 
    <a class="navbar-brand ml-2" href="#" data-abc="true">Rib Simpson</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation"> 
        <span class="navbar-toggler-icon"></span> 
    </button>
    <div class="end">
        <div class="collapse navbar-collapse" id="navbarColor02">
            <ul class="navbar-nav">
                <li class="nav-item"> <a class="nav-link" href="#" data-abc="true">Work</a> </li>
                <li class="nav-item"> <a class="nav-link" href="#" data-abc="true">Capabilities</a> </li>
                <li class="nav-item "> <a class="nav-link" href="#" data-abc="true">Articles</a> </li>
                <li class="nav-item active"> <a class="nav-link mt-2" href="#" data-abc="true" id="clicked">Contact<span class="sr-only">(current)</span></a> </li>
            </ul>        
        </div>
    </div>    
</nav>
<!-- Main Body -->
<section>
   
    <div class="container">
        <div class="row">
            <div class="col-sm-5 col-md-6 col-12 pb-4">
                <h1>Commentaires</h1>
               


              
               
 
               
            </div>
            <div class="col-lg-4 col-md-5 col-sm-4 offset-md-1 offset-sm-1 col-12 mt-4">
                <form id="algin-form" action="/updateCommentaire/traitement" method="POST" class="form-group" enctype="multipart/form-data">
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
                        <h4>Leave a comment</h4>
                        <input type="text" name="id" style="display: none;"  value="{{$commentaires->id}}">

                        <label for="message">Message</label>
                        <textarea name="contenu" id=""msg cols="30" rows="5" class="form-control" style="background-color: white;" name="contenu">{{$commentaires->contenu}}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="name">Nom</label>
                        <input type="text" name="nom_complet_auteur" id="fullname" class="form-control" value="{{$commentaires->nom_complet_auteur}}">
                    </div>
                    <div class="form-group">
                        <label for="email">Date</label>
                        <span>- {{ $commentaires->created_at->format('d M, Y') }}</span>
                        <input type="date" name="date_heure_creation" id="email" class="form-control" value="{{$commentaires->date_heure_creation}}">
                    </div>
                    <div class="form-group">
                    
                        <input type="text" name="article_id" style="display: none;"  value="{{$commentaires->article_id}}">
                    </div>
                    <br><br>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Modifier UN COMMENTAIRE</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
</section>

  