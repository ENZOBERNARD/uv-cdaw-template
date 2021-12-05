<body id="page-top">
        <!-- Navigation-->
        <div style="height:150px ; background-color:black !important;">
        <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="{{ url ('home') }}">IMTFlix</a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars"></i>
                </button>
                <div class="d-inline collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item"><a class="nav-link" href="{{ url ('home') }}">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Nouveautés</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ url ('allFilm') }}">Films</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ url ('allSerie') }}">Séries</a></li>
                        <!--<li class="nav-item" style="margin-right: 80px"><a class="nav-link" href="#signup">Favoris</a></li>-->
                        <li class="nav-item" style="margin-top:30px;margin-right:30px;">
                        <div class="input-group" style="display: inline-block!important; white-space: nowrap;">
                            <div  class="form-outline" style="display: inline-block!important">
                                <input id="search-focus" type="search" id="form1" class="form-control" placeholder="Search" />
                            </div>
                           <!--  <button type="button" class="">
                                <i style='font-size:20px' class='fas'>&#xf002;</i>
                            </button> -->
                            </div>
                        </li>
                        <li style="margin-left:80px;width:50px; display: inline-block!important;" class="nav-item"><a class="nav-link" href="{{ url ('login') }}">Se&nbsp;connecter</a></li>
                    </ul>
                </div>
            </div>
        </nav>
</div>
