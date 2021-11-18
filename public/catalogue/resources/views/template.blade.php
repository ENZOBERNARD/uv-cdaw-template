 
<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="../css/carou.css">
  </head>
<body>
 <!-- Navigation-->
 <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="#page-top">IMTFlix</a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars"></i>
                </button>
                <div class="d-inline collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item"><a class="nav-link" href="#about">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="#projects">Nouveautés</a></li>
                        <li class="nav-item"><a class="nav-link" href="#signup">Films</a></li>
                        <li class="nav-item"><a class="nav-link" href="#signup">Séries</a></li>
                        <li class="nav-item" style="margin-right: 20px"><a class="nav-link" href="#signup">Favoris</a></li>
                       <!-- <li class="nav-item">
                        <div class="dropdown show">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Favoris
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="#">Historique</a>
                                <a class="dropdown-item" href="#">Playlists</a>
                            </div>
                            </div>
                       </li> -->
                        <li class="nav-item" style="margin-top:30px;margin-right:30px;">
                        <div class="input-group" style="display: inline-block!important; white-space: nowrap;">
                            <div  class="form-outline" style="display: inline-block!important">
                                <input id="search-focus" type="search" id="form1" class="form-control" placeholder="Search" />
                            </div>
                            <button type="button" class="">
                                <i style='font-size:20px' class='fas'>&#xf002;</i>
                            </button>
                            </div>
                        </li>
                        <li style="margin-left:80px; display: inline-block!important;" class="nav-item"><a class="nav-link" href="login/login.html">Se connecter</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        
          <script></script>
          <div class="container">
        @yield('content')
    </div>