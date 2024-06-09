<!doctype html>
<html lang="en">
<head>
  <title>Commentaires</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;500;700&display=swap" rel="stylesheet">
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
    .article-section {
      position: relative;
      margin-bottom: 30px;
    }
    .article-section img {
      width: 100%;
      height: 800px;
    }
    .article-section .article-description {
      position: absolute;
      bottom: 0;
      left: 0;
      right: 0;
      background-color: rgba(255, 255, 255, 0.8);
      padding: 20px;
      text-shadow: 0 0 5px rgba(0, 0, 0, 0.3);
    }
    .comment-section {
      background-color: #fff;
      border-radius: 10px;
      padding: 50px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      width: 80%;
    }
    .comment {
      background-color: #f8f9fa;
      border-radius: 10px;
      padding: 20px;
      margin-bottom: 20px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
    .comment-form {
      background-color: #fff;
      border-radius: 10px;
      padding: 20px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      margin-right: 30px;
    }
    .comment-form label {
      font-weight: bold;
    }
    .comment-form button {
      background-color: #46107f;
      border-color: #46107f;
    }
    footer {
      background-color: #46107f;
      color: #fff;
      padding: 20px 0;
      text-align: center;
    }
    footer a {
      color: #fff;
      text-decoration: none;
      margin: 0 10px;
    }
    footer a:hover {
      text-decoration: underline;
    }
  </style>
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-dark">
    <div class="container-fluid">
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

  <section class="py-5">
    <div class="container-fluid">
      <div class="article-section">
        <img src="{{ $article->photo }}" alt="Article Image">
        <div class="article-description">
          <h2>{{ $article->nom }}</h2>
          <p>{{ $article->description }}</p>
        </div>
      </div>
      <div class="row">
        <div class="col-md-8">
          <div class="comment-section">
            <h3 class="text-center mb-4">Commentaires</h3>
            @foreach($article->commentaires as $commentaire)
            <div class="comment">
              <div class="d-flex align-items-center mb-2">
                <img src="https://i.imgur.com/yTFUilP.jpg" alt="" class="rounded-circle me-2" width="40" height="40">
                <h5 class="mb-0">{{ $commentaire->nom_complet_auteur }}</h5>
              </div>
              <p class="mb-2">{{ $commentaire->contenu }}</p>
              <div class="d-flex justify-content-between align-items-center">
                <small class="text-muted">{{ $commentaire->created_at->format('d M, Y') }}</small>
                <div>
                  <a href="/update-commentaire/{{ $commentaire->id }}" class="btn btn-sm btn-primary">Modifier</a>
                  <a onclick="return confirm('Confirmer la suppression')" href="/delete-commentaire/{{ $commentaire->id }}" class="btn btn-sm btn-danger">Supprimer</a>
                </div>
              </div>
            </div>
            @endforeach
          </div>
        </div>
        <div class="col-md-4">
          <div class="comment-form">
            <form id="algin-form" action="/ajouterCommentaire/traitement" method="POST" class="form-group" enctype="multipart/form-data">
              @csrf
              @if (session('status'))
              <div class="alert alert-success">
                {{ session('status') }}
              </div>
              @endif

              <ul>
                @foreach ($errors->all() as $error)
                <li class="alert alert-danger">{{ $error }}</li>
                @endforeach
              </ul>
              <div class="mb-3">
                <h4>Laissez-nous un message !</h4>
                <label for="message" class="form-label">Message</label>
                <textarea name="contenu" id="message" rows="5" class="form-control" name="contenu"></textarea>
              </div>
              <div class="mb-3">
                <label for="name" class="form-label">Nom</label>
                <input type="text" name="nom_complet_auteur" id="name" class="form-control">
              </div>
              <div class="mb-3">
                <label for="date" class="form-label">Date</label>
                <input type="date" name="date_heure_creation" id="date" class="form-control">
              </div>
              <div class="mb-3">
                <input type="text" name="article_id" style="display: none;" value="{{ $article->id }}">
              </div>
              <button type="submit" class="btn btn-primary">Ajouter un commentaire</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>

  <footer>
    <div class="container">
      <p>&copy; 2024 Commentaires. Tous droits réservés.</p>
      <div>
        <a href="#">Politique de confidentialité</a> | <a href="#">Conditions d'utilisation</a> | <a href="#">Contactez-nous</a>
      </div>
    </div>
  </footer>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>
</body>
</html>
