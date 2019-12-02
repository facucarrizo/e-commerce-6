<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="https://fonts.googleapis.com/css?family=Tomorrow&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
   <link rel="stylesheet" href="css/style.css">
   <script src="https://kit.fontawesome.com/67f61afa3e.js" crossorigin="anonymous"></script>
 <title>CASBUSAGI - Zapatillas al paso</title>
</head>

<body>
  <a href="Contacto.html" id="aa" > Contactanos</a>
  <!-- Header -->

  <div class="">
  <?php require_once"NAV.php" ?>

    <!-- carrusel -->
    <div class="container-fluid bd-example pt-2">
      <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
          <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
          <li data-target="#carouselExampleCaptions" data-slide-to="3"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="img/giphyfluor5.gif"  class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h5>CONOCE TUS LIMITES Y LUEGO DESAFIALOS</h5>
                  <p id="CON">CONVERSE</p>
                </div>
              </div>

          <div class="carousel-item">
            <img src="img/giphyfluor2.gif"  class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>SIMPLEMENTE HAZLO</h5>
              <p id="CON">NIKE</p>
            </div>
          </div>
          <div  class="carousel-item ">
            <img src="img/giphyfluor6.gif"  class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>ES UN MUNDO GRANDE, VE Y DISFRUTALO</h5>
              <p id="CON">CONVERSE</p>
            </div>
          </div>
          <div class="carousel-item">
              <img src="img/giphyfluor1.gif" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>NADA ES IMPOSIBLE</h5>
              <p>ADIDAS</p>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>

































    <!-- tarjetas -->


    <div class="container tarjetas">
      <div class="row">
        <div class="col-md-4">
          <figure class="card card-product">
            <div class="img-wrap"><a href="producto.html"><img href="producto.html" src="img/nikelogo.jpg"></a></div>
            <figcaption class="info-wrap">
              <h4 class="title">NIKE</h4>
              <p class="desc">Vea aquí los ultimos modelos</p>

              <div class="rating-wrap">
                <div class="label-rating">132 reviews</div>
                <div class="label-rating">154 orders </div>
              </div>
            </figcaption>


          </figure>
        </div>
        <div class="col-md-4">
          <figure class="card card-product">
            <div class="img-wrap"><a href="producto-adidas.html"><img href="producto.html" src="img/adidaslogo.jpg"></a></div>
            <figcaption class="info-wrap">
              <h4 class="title">ADIDAS</h4>
              <p class="desc">Todos los talles y colores.</p>
              <div class="rating-wrap">
                <div class="label-rating">132 reviews</div>
                <div class="label-rating">154 orders </div>
              </div>
            </figcaption>

          </figure>
        </div>
        <div class="col-md-4">
          <figure class="card card-product">
            <div class="img-wrap"><a href="producto-vans.html"><img href="producto.html" src="img/vans-logo.png"></a></div>
            <figcaption class="info-wrap">
              <h4 class="title">VANS</h4>
              <p class="desc">El calzado estrella.</p>
              <div class="rating-wrap">
                <div class="label-rating">132 reviews</div>
                <div class="label-rating">154 orders </div>
              </div>
            </figcaption>


            </div>
          </figure>
        </div>
      </div>
    </div>




















    <!--container.//-->


    <article class="bg-secondary mb-3  container-fluid">
      <div class="card-body text-center">
        <h4 class="text-white"><a href="#"><img src="img/Icono.ico" alt="" height="100px" width="300px"></a> <br>SIEMPRE UN PASO ADELANTE </h4>
        <p class="h5 text-white"> Importadores en calidad, expertos en atención.</p> <br>

      </div>

    </article>










































<!-- FOOTER: EMPIEZA -->
<?php require_once 'footer.php';  ?>
<!-- FOOTER: TERMINA -->



</div>











































  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
    crossorigin="anonymous"></script>
</body>

</html>
