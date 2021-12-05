<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="../resources/css/navbar.css" rel="stylesheet" />

        <!-- Bootstrap CSS -->
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.2/css/bootstrap.min.css'>
<!-- Font Awesome CSS -->
<link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.3.1/css/all.css'>
</head>
<body>
<div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
              <h1>Nouvelle Playlist</h1>
    <div class="modal-body">
    <div class="d-flex flex-column text-center">
        <form method="post" action="{{ url('/addPlaylist') }}">
            @csrf
          <div class="form-group">
              <label for="TITRE">TITRE</label>
              <input type="text" class="form-control" name="TITRE"/>
          </div>
          <div class="form-group">
              <label for="DESCRIPTION">DESCRIPTION</label>
              <input type="text" class="form-control" name="DESCRIPTION"/>
          </div>

          <div class="form-group">
              <label for="DATE_DE_SORTIE">VIGNETTE</label>
              <input type="text" class="form-control" name="VIGNETTE"/>
          </div>
          <div class="form-group">
              <label for="ACTEURS" hidden="true">PSEUDO</label>
              <input type="text" class="form-control" name="PSEUDO"/ value="{{Auth::user()->id}}" hidden="true">
          </div>
          <button type="submit" class="btn btn-primary">Créer</button>
      </form>
      </div>
      </div>
      </div>
      </div>
             <!-- jQuery -->
<script src='https://code.jquery.com/jquery-3.3.1.slim.min.js'></script>
<!-- Popper JS -->
<script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js'></script>
<!-- Bootstrap JS -->
<script src='https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js'></script>
</body>
</html>