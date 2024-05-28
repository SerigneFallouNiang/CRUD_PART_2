<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD BLOG D' ARTICLE</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <div class="container ">
     <div class="row">
      <div class="col s12">
          <h1>AJOUTER UN ARTICLE </h1>
          <hr>

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


          <form action="/ajouter/traitement" method="POST" class="form-group" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
              <label for="Nom" class="form-label">Nom</label>
              <input type="text" class="form-control" id="Nom"  name="nom">
            </div>

            <div class="mb-3">
                <label for="Description" class="form-label">Description</label>
                <input type="text" class="form-control" id="description"  name="description">
              </div>

              <div class="mb-3">
                <label for="Classe" class="form-label">Date création</label>
                <input type="date" class="form-control" id="date"  name="date_création">
              </div>

              <div class="mb-3">
                <label for="Classe" class="form-label">PHOTO</label>
                <input type="text" class="form-control" id="photo"  name="photo">
              </div>

              <div class="mb-3">
                <label class="form-label">A la une</label><br>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" id="valide" name="valider" value="1">
                  <label class="form-check-label" for="featuredYes">Oui</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" id="featuredNo" name="valider" value="0">
                  <label class="form-check-label" for="featuredNo">Non</label>
                </div>
              </div>
            
            <button type="submit" class="btn btn-primary">AJOUTER UN ARTICLE</button>
            <br> <br>
            <a href="/" class="btn btn-danger">Revenir à la liste des article</a>
          </form>
         
            
        </div>
      </div>
    </div>

        
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>