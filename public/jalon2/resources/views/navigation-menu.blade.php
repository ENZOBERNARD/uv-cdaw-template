<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Grayscale - Start Bootstrap Theme</title>
        <link rel="icon" type="image/x-icon" href="../resources/assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="../public/css/styles.css" rel="stylesheet" />
        <link href="../public/css/navbar.css" rel="stylesheet" />
        <link href="../public/css/carou2.css" rel="stylesheet" />

        <!-- Bootstrap CSS -->
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.2/css/bootstrap.min.css'>
<!-- Font Awesome CSS -->
<link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.3.1/css/all.css'>
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <div style="height:150px" style="background-color:darkgrey!important">
        <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav"  >
            <div class="container px-4 px-lg-5" >
                <a class="navbar-brand" href="#page-top">IMTFlix</a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars"></i>
                </button>
                <div class="d-inline collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item"><a class="nav-link" href="{{ route('dashboard') }}">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('profile.show') }}">Profile</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Films</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Séries</a></li>
                        <!--<li class="nav-item" style="margin-right: 80px"><a class="nav-link" href="#signup">Favoris</a></li>-->
                        <li class="nav-item" style="margin-right: 80px;margin-top: 20px;">
                        <div class="dropdown show">
                            <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Favoris
                              </a>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="#">Historique</a>
                                <a class="dropdown-item" href="#">Playlists</a>
                            </div>
                            </div>
                       </li> 
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
                        <li><img class="h-10 w-10 rounded-full object-cover" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" style="border-radius: 50%;" /> </li>
                        <li style="margin-left:80px;width:50px; display: inline-block!important;" class="nav-item">
                        <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-jet-responsive-nav-link href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                    this.closest('form').submit();" style="margin-bottom:15px">
                                    {{ __('Déconnexion') }}
                    </x-jet-responsive-nav-link>
                    
                </form>    
                </li>
                    </ul>
                </div>
            </div>
        </nav>
</div>



<div class="font-medium text-base text-gray-800">Bienvenue {{ Auth::user()->name }}</div>

       
        </section>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="../public/js/navbar.js"></script>
        <script src="../public/js/scripts.js"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>

        <!-- jQuery -->
<script src='https://code.jquery.com/jquery-3.3.1.slim.min.js'></script>
<!-- Popper JS -->
<script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js'></script>
<!-- Bootstrap JS -->
<script src='https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js'></script>


