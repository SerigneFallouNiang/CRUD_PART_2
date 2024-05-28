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
          <h1>MODIFIER UN ARTICLE </h1>
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


          <form action="/update/traitement" method="POST" class="form-group" >
            @csrf
            <input type="text" name="id" style="display: none;"  value="{{$articles->id}}">

            <div class="mb-3">
              <label for="Nom" class="form-label">Nom</label>
              <input type="text" class="form-control" id="Nom"  name="nom" value="{{$articles->nom}}">
            </div>

            <div class="mb-3">
                <label for="Description" class="form-label">Description</label>
                <input type="text" class="form-control" id="description"  name="description" value="{{$articles->description}}">
              </div>

              <div class="mb-3">
                <label for="Classe" class="form-label">Date création</label>
                <input type="date" class="form-control" id="date"  name="date_création" value="{{$articles->date_création}}">
              </div>

              <div class="mb-3">
                <label for="Classe" class="form-label">PHOTO</label>
                <input type="text" class="form-control" id="photo"  name="photo" value="{{$articles->photo}}">
              </div>

              <div class="mb-3">
                <label class="form-label">A la une</label><br>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" id="valideOui" name="valider" value="1" {{ $articles->valider == 1 ? 'checked' : '' }}>
                  <label class="form-check-label" for="valideOui">Oui</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" id="valideNon" name="valider" value="0" {{ $articles->valider == 0 ? 'checked' : '' }}>
                  <label class="form-check-label" for="valideNon">Non</label>
                </div>
              </div>

            
            <button type="submit" class="btn btn-primary">MODIFIER UN ARTICLE</button>
            <br> <br>
            <a href="/article" class="btn btn-danger">Revenir à la liste des article</a>
          </form>
         
            
        </div>
      </div>
    </div>

        
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>