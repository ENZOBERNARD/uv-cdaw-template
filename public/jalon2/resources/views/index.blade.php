@extends('templates.template')

@section('content')

<!-- Masthead-->

<header class="masthead" style="padding-top: 0px;">
@if (Auth::check())
<div >Bienvenue {{ Auth::user()->name }}</div>
@endif
            <div class="container px-4 px-lg-5 d-flex h-90 align-items-center justify-content-center">
                <div class="d-flex justify-content-center">
                    <div class="">
                        <h4 class="mx-auto my-0 text-uppercase">Films du moment</h4>
                        <br>

                    <!--Creation du div qui englobera tout le carrousel--> 
                    <div id="option" class="carousel slide" data-ride="carousel"> 
                    <!--Alout dos indicateurs de nacrjnation en has de page --> 
                    <ul class="carousel-indicators"> 
                        <li data-target="#option" data-slide-to="0" class="active"></li> 
                        <li data-target="#option" data-slide-to="1"></li> 
                        <li data-target="#option" data-slide-to="2"></li> </ul> 
                    <!--On met en place le diaporama--> 
                    <div class="carousel-inner"> 
                    <!--On place les elements du diaporoma--> 
                    <div class="carousel-item active"> <img src="../public/assets/dark.jpg" alt="galaxie"> 
                    <!--On place la legende-->, 
                    <div class="carousel-caption"> <h3></h3> <p></p> </div> </div> 
                    <div class="carousel-item"> <img src="../public/assets/avatar.jpg" alt="galaxie"> <div class="carousel-caption"> <h3></h3> <p></p> </div> </div> 
                    <div class="carousel-item"> <img src="../public/assets/looper.jpg" alt="galaxie"> <div class="carousel-caption"> <h3></h3> <p></p> </div> </div> </div> 
                    <!--On met en place les controles precedent / prochain--> 
                    <a href="#option" class="carousel-control-prev" data-slide="prev"> 
                    <!--On place l'icone--> 
                    <span class="carousel-control-prev-icon"></span> </a> 
                    <a href="#option" class="carousel-control-next" data-slide="next">
                    <span class="carousel-control-next-icon"></span> 
</a> </div>
                        
                    </div>
                </div>
            </div>
        </header>
        
        <!-- Contact-->
        <section class="contact-section bg-black">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5">
                    <div class="col-md-4 mb-3 mb-md-0">
                        <div class="card py-4 h-100">
                            <div class="card-body text-center">
                                <i class="fas fa-map-marked-alt text-primary mb-2"></i>
                                <h4 class="text-uppercase m-0">Adresse</h4>
                                <hr class="my-4 mx-auto" />
                                <div class="small text-black-50">59500 Lahure, Douai</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3 mb-md-0">
                        <div class="card py-4 h-100">
                            <div class="card-body text-center">
                                <i class="fas fa-envelope text-primary mb-2"></i>
                                <h4 class="text-uppercase m-0">Email</h4>
                                <hr class="my-4 mx-auto" />
                                <div class="small text-black-50"><a href="#!">imtflix@etu.imt-nord-europe.com</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3 mb-md-0">
                        <div class="card py-4 h-100">
                            <div class="card-body text-center">
                                <i class="fas fa-mobile-alt text-primary mb-2"></i>
                                <h4 class="text-uppercase m-0">Phone</h4>
                                <hr class="my-4 mx-auto" />
                                <div class="small text-black-50">+33 902-88320</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="social d-flex justify-content-center">
                    <a class="mx-2" href="#!"><i class="fab fa-twitter"></i></a>
                    <a class="mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
                    <a class="mx-2" href="#!"><i class="fab fa-github"></i></a>
                </div>
            </div>
        </section>
        <!-- Footer-->
<footer class="footer bg-black small text-center text-white-50"><div class="container px-4 px-lg-5">Copyright &copy; Your Website 2021</div></footer>
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

    </body>
</html>
        








@stop()