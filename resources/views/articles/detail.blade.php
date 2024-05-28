<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Centered Card</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .center-container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh; /* Full viewport height */
        }
    </style>
</head>
<body>
    <div class="center-container">
        <div class="card" style="width: 18rem;">
            <img src="..." class="card-img-top" alt="...">
            <img src="{{$article ->photo}}" alt=""  class="card-img-top">
            <div class="card-body">
                <h5 class="card-title">{{$article ->nom}}</h5>
                <p class="card-text">{{$article ->description}}</p>
            </div>
            <div class="card-body">
                <a href="/article" class="card-link">Retour</a>
                <a href="/update-article/{{$article->id}}" class="card-link">Modifier</a>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
