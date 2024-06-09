




<!doctype html>
<html lang="en">
<head>
  <title>Commentaires</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <style>
    body {
      font-family: 'Raleway', sans-serif;
      background-color: #f8f9fa;
    }
    .navbar {
      background-color: #46107f;
    }
    .navbar-brand,
    .nav-link {
      color: #fff;
    }
    .social-icon {
      color: #fff;
      margin-left: 10px;
    }
    .comment-section {
      background-color: #fff;
      border-radius: 10px;
      padding: 20px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
    .comment-section h1 {
      color: #46107f;
    }
    .comment-form {
      background-color: #f8f9fa;
      border-radius: 10px;
      padding: 20px;
    }
    .comment-form label {
      font-weight: bold;
    }
    .comment-form button {
      background-color: #46107f;
      border-color: #46107f;
    }
  </style>
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-dark">
    <div class="container">
      <a class="navbar-brand" href="/">Accueil</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav me-auto">
          <li class="nav-item">
            <a class="nav-link" href="#">À propos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Commentaires</a>
          </li>
        </ul>
        <div class="social-icons">
          <a href="#" class="social-icon"><i class="fab fa-facebook"></i></a>
          <a href="#" class="social-icon"><i class="fab fa-twitter"></i></a>
          <a href="#" class="social-icon"><i class="fab fa-instagram"></i></a>
        </div>
      </div>
    </div>
  </nav>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD IN LARAVEL 10</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <div class="container text-center">
     <div class="row">
      <div class="col s12">
          <h1>BLOG DES ARTICLES</h1>
          <hr>
          <a href="/ajouter" class="btn btn-primary">Ajouter un article</a>
          <hr>
          @if (session('status'))
              <div class="alert alert-succes">
                {{session('status')}}
              </div>
          @endif

            <table class="table">
                  <thead>
                      <tr>
                        <th>#</th>
                        <th>nom</th>
                        <th>Date_création</th>
                        <th>A la une</th>
                        <th>Photo</th>
                        <th>Action</th>


                      </tr>
                  </thead>
                  <tbody>


                    @foreach($articles  as $article)
                      <tr>
                        <td>{{$article->id}}</td>
                        <td>{{$article->nom}}</td>
                        <td>{{$article ->date_création}}</td>
                        <td>
                          <div class="mb-3">
                            {{-- <label class="form-label">A la une</label><br> --}}
                            <div class="form-check form-check-inline">
                              <input class="form-check-input" type="radio" id="valideOui{{$article->id}}" name="valider{{$article->id}}" value="1" {{ $article->valider == 1 ? 'checked' : '' }} disabled>
                              <label class="form-check-label" for="valideOui{{$article->id}}">Oui</label>
                            </div>
                            <div class="form-check form-check-inline">
                              <input class="form-check-input" type="radio" id="valideNon{{$article->id}}" name="valider{{$article->id}}" value="0" {{ $article->valider == 0 ? 'checked' : '' }} disabled>
                              <label class="form-check-label" for="valideNon{{$article->id}}">Non</label>
                            </div>
                          </div>
                        </td>
                        <td ><img src="{{$article ->photo}}" alt="" style="width:50px; border-radius: 50%;height:50px"></td>
                        <td>
                        <a onclick="return confirm('Confirmer la suppression')" href="/delete-article/{{$article->id}}" class="btn btn-danger">Delete</a>
                        <a href="/update-article/{{$article->id}}" class="btn btn-info">Update</a>
                        <a href="/detail/{{$article->id}}" class="btn btn-info">Détail</a>
                        </td>


                        @endforeach
                    </td>

                  </tbody>
            </table>

        </div>
      </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
