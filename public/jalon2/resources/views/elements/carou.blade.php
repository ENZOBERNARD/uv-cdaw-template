
<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="<?php echo asset('css/carou.css')?>">
  </head>
<body>
  
  <div class="container text-center my-3">
      <p class=title>{{$title}}</p>
    <div class="row mx-auto my-auto justify-content-center">
        <div id="recipeCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner" role="listbox">
                <div class="carousel-item {{$title}} active">
                    <div class="col-md-3">
                        <div class="card">
                            <div class="card-img">
                                <img src="assets/avatar.jpg" class="img-fluid">
                            </div>
                            <div class="card-img-overlay">Joker</div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item {{$title}}">
                    <div class="col-md-3">
                        <div class="card">
                            <div class="card-img">
                                <img src="assets/avatar.jpg" class="img-fluid">
                            </div>
                            <div class="card-img-overlay">Slide 2</div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item {{$title}}">
                    <div class="col-md-3">
                        <div class="card">
                            <div class="card-img">
                                <img src="assets/avatar.jpg" class="img-fluid">
                            </div>
                            <div class="card-img-overlay">Slide 3</div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item {{$title}}">
                    <div class="col-md-3">
                        <div class="card">
                            <div class="card-img">
                                <img src="assets/avatar.jpg" class="img-fluid">
                            </div>
                            <div class="card-img-overlay">Slide 4</div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item {{$title}}">
                    <div class="col-md-3">
                        <div class="card">
                            <div class="card-img">
                                <img src="assets/avatar.jpg" class="img-fluid">
                            </div>
                            <div class="card-img-overlay">Slide 5</div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item {{$title}}">
                    <div class="col-md-3">
                        <div class="card">
                            <div class="card-img">
                                <img src="assets/avatar.jpg" class="img-fluid">
                            </div>
                            <div class="card-img-overlay">Slide 6</div>
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev bg-transparent w-aut" href="#recipeCarousel" onclick="next{{$title}}()" role="button" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            </a>
            <a class="carousel-control-next bg-transparent w-aut" href="#recipeCarousel" onclick="next{{$title}}()" role="button" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
            </a>
        </div>
    </div>
</div>
<script>
    let {{$title}}item = document.querySelectorAll('.carousel .carousel-item.{{$title}}')
   console.log({{$title}}item);
   {{$title}}item.forEach((el) => {
       const minPerSlide = 6;
       console.log("hello");
       let next = el.nextElementSibling
       for (var i=1; i<minPerSlide; i++) {
           if (!next) {
               // wrap carousel by using first child
               next = {{$title}}item[0]
             }
           let cloneChild = next.cloneNode(true)
           el.appendChild(cloneChild.children[0])
           next = next.nextElementSibling
       }
   })

   function next{{$title}}(){
    console.log({{$title}}item);
     for (i=0;i<{{$title}}item.length;i++) {
       if({{$title}}item[i].classList.contains("active")){
        {{$title}}item[i].classList.remove("active");
         if({{$title}}item[i+1]){
         {{$title}}item[i+1].classList.add("active");
         }
         else{
          {{$title}}item[0].classList.add("active");
         }
         break;
       }
      }
     {{$title}}item.forEach(item => {
        console.log(item.classList);
      });
   }
   </script>
   <!--<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>-->
   
</body>
</html>