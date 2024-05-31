<!doctype html>
<html lang="en">
<head>
  <title>Navbar</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css?family=Raleway:400,500,500i,700,800i" rel="stylesheet">
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <link rel="stylesheet" href="{{asset('./css/style.css')}}">
</head>
<style>
  
</style>
  <body>
<header style="background-color:#46107f ">
    <nav class="navbar navbar-expand-sm   navbar-light bg-light"  style="background-color:#46107f " >
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarTogglerDemo03" >
          <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item">
              <a class="nav-link" href="#">Accueil <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">A propos</a>
            </li>
         
          <li class="nav-item">
            <a class="nav-link" href="#">Commentaire</a>
          </li>
          </ul>
          <div class="social-part">
            <i class="fa fa-facebook" aria-hidden="true"></i>
            <i class="fa fa-twitter" aria-hidden="true"></i>
            <i class="fa fa-instagram" aria-hidden="true"></i>
          </div>
        </div>
      </nav>
    </header>

<!------ Include the above in your HEAD tag ---------->

<link href="https://raw.githubusercontent.com/daneden/animate.css/master/animate.css" rel="stylesheet">

<div id="myCarousel" class="carousel slide carousel-fade" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <div class="mask flex-center">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-md-7 col-12 order-md-1 order-2">
              <h4>{{$article ->nom}}</h4>
              <p>{{$article ->description}}</p>
                <a style="background: #ce0033" href="/" class="card-link">Retour</a>
                <a href="/commentaire/{{$article->id}}">Commentaire</a></div>
            <div class="col-md-5 col-12 order-md-2 order-1"><img src="{{$article ->photo}}" class="mx-auto" alt="slide"></div>
          </div>
        </div>
      </div>
    </div>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
  </body>
  </html>

           