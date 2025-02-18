@extends('templates.template')

@section('content')
        <!-- Product section-->
        <section class="py-5">
            <div class="container px-4 px-lg-5 my-5">
                <div class="row gx-4 gx-lg-5 align-items-center">
                    <div class="col-md-6"><img class="card-img-top mb-5 mb-md-0" src="{{URL::asset($film->AFFICHE)}}" alt="..." height="600px" width="700px" /></div>
                    <div class="col-md-6">
                        <h1 class="display-5 fw-bolder">{{$film->TITRE}}</h1>
                        <h2>{{$film->DUREE}}min - Action Science-Fiction</h2>
                        <p class="lead">{{$film->DESCRIPTION}}</p>
                        <p> De :{{$film->REALISATEUR}}</p>
                        <p>Avec : {{$film->ACTEURS}}</p>
                        <p>Date de sortie : {{$film->DATE_DE_SORTIE}}</p>
                        <div class="d-flex">
                            <button class="btn btn-outline-dark flex-shrink-0" type="button" id="vueBouton">
                                <i class="bi bi-eye"></i>
                                Vue
                            </button>
                            <button class="btn btn-outline-dark flex-shrink-0" id="likeBouton">
                                <i class="bi bi-heart"></i>
                                J'aime
                                @csrf
                            </button>
                            <button class="btn btn-outline-dark flex-shrink-0" type="button">
                                <i class="bi bi-plus-lg"></i>
                                Ajouter à une playlist
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script src="{{ URL::asset('js/film.js') }}"></script>
        <script>
            var user = {{Auth::user()->id}};
            var media = {{$film->ID}};

            likeBouton = document.getElementById('likeBouton');
            vueBouton = document.getElementById('vueBouton');

likeBouton.addEventListener("click", function (e) {
  console.log(media + " " + user);
  if ({{Auth::user()->id}}){
  let request = $.ajax({
    type: "GET",
    headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
    url: "http://localhost:8080/jalon2/public/likeCreate/"+user+"/"+media,
    success: function (msg) {
      
    },
    error: function (resultat, statut, erreur) {
      // e.preventDefault();
      // alert('Un problème est survenu lors de la récupération des informations');
    }
  });
}
});

vueBouton.addEventListener("click", function (e) {
  console.log(media + " " + user);
  if ({{Auth::user()->id}}){
  let request = $.ajax({
    type: "GET",
    headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
    url: "http://localhost:8080/jalon2/public/voirCreate/"+user+"/"+media,
    success: function (msg) {
      
    },
    error: function (resultat, statut, erreur) {
      // e.preventDefault();
      // alert('Un problème est survenu lors de la récupération des informations');
    }
  });
}
});
        </script>
    </body>
</html>

@stop()
