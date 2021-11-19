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
              <h1>CRUD Film</h1>
    <div class="modal-body">
    <div class="d-flex flex-column text-center">
        <form method="post" action="{{ url('/filmUpdate/5') }}">
            @csrf
          <div class="form-group">
              <label for="ID">ID</label>
              <input type="text" class="form-control" name="ID"/>
          </div>
          <div class="form-group">
              <label for="TITRE">TITRE</label>
              <input type="text" class="form-control" name="TITRE"/>
          </div>
          <div class="form-group">
              <label for="DESCRIPTION">DESCRIPTION</label>
              <input type="text" class="form-control" name="DESCRIPTION"/>
          </div>

          <div class="form-group">
              <label for="DATE_DE_SORTIE">DATE_DE_SORTIE</label>
              <input type="text" class="form-control" name="DATE_DE_SORTIE"/>
          </div>
          <div class="form-group">
              <label for="DUREE">DUREE</label>
              <input type="text" class="form-control" name="DUREE"/>
          </div>
          <div class="form-group">
              <label for="ACTEURS">ACTEURS</label>
              <input type="text" class="form-control" name="ACTEURS"/>
          </div>
          <div class="form-group">
              <label for="REALISATEUR">REALISATEUR</label>
              <input type="text" class="form-control" name="REALISATEUR"/>
          </div>
          <div class="form-group">
              <label for="PAYS">PAYS</label>
              <input type="text" class="form-control" name="PAYS"/>
          </div>
          <div class="form-group">
              <label for="AFFICHE">AFFICHE</label>
              <input type="text" class="form-control" name="AFFICHE"/>
          </div>
          <div class="form-group">
              <label for="NOTE">NOTE</label>
              <input type="text" class="form-control" name="NOTE"/>
          </div>
          <div class="form-group">
              <label for="NOMBRE_EPISODE">NOMBRE_EPISODE</label>
              <input type="text" class="form-control" name="NOMBRE_EPISODE"/>
          </div>
          <button type="submit" class="btn btn-primary">Ajouter</button>
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