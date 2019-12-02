<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/producto.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Nike's Shoes</title>

</head>
<body>


  <a href="Contacto.html" id="aa" > Contactanos</a>
  <!-- Header -->
  <div class="">
  <?php require_once"NAV.php" ?>

    <!--FIN HEADER-->

<div class="Contenedor-tarjeta">
<div class="container-card">
<div class="row">
<div class="col-md-5">
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
<div class="carousel-inner">
 <div class="carousel-item active">
<img src="img/nike-2.jpg" class="d-block w-100">
 </div>
 <div class="carousel-item">
<img src="img/nike-2-2.jpg" class="d-block w-100">
</div>
<div class="carousel-item">
<img src="img/nike-2-3.jpg" class="d-block w-100">
</div>
</div>
<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
<span class="carousel-control-prev-icon" aria-hidden="true"></span>
<span class="sr-only">Previous</span>
</a>
<a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
<span class="carousel-control-next-icon" aria-hidden="true"></span>
<span class="sr-only">Next</span>
</a>
<div class="colores">
    <button type="button" class="btn btn-light" style="color:rgba(255, 255, 255, 0);">BL</button>
    <button type="button" class="btn btn-secondary" style="color:rgba(129, 127, 127, 0);">BL</button>
    <button type="button" class="btn btn-success" style="color: rgba(0, 128, 0, 0);">BL</button>
    <button type="button" class="btn btn-danger" style="color: rgba(255, 0, 0, 0);">BL</button>
</div>
</div>

</div>
<div class="col-md-7">
    <p class="newarrival text-center"> NEW </p>

    <h2>Nike Shoe's <a style="position: absolute; top: 14%; right:10%;" href="">
      <ul>
      <li><i id="cartera" class="fa fa-shopping-bag"></i></li>
      <li>
        <i  id="cartera" class="fa fa-heart-o active"></i></li>
    </ul>

    </a

  ></h2>


<div class="estrellas">
    <i class="fa fa-star"></i>
    <i class="fa fa-star"></i>
    <i class="fa fa-star"></i>
    <i class="fa fa-star"></i>
    <i class="fa fa-star"></i>
</div>
    <p class="precio"> $5.000</p>


<div class="talles">

  <h3>Selecciona tu Talle:</h3>
  <div style="width: 10%;" class="btn-group btn-group-toggle" data-toggle="buttons" class="talles-btn">
   <label class="btn btn-secondary">
   <input type="radio" name="talles" class="talle" autocomplete="off" > 38</label>
  <label class="btn btn-secondary">
  <input type="radio" name="talles" class="talle" autocomplete="off"> 39</label>
  <label class="btn btn-secondary">
  <input type="radio" name="talles" class="talle" autocomplete="off";> 40 </label>
  <label class="btn btn-secondary">
 <input type="radio" name="talles" class="talle" autocomplete="off" > 41 </label>
 <label class="btn btn-secondary">
 <input type="radio" name="talles" class="talle" autocomplete="off"> 42 </label>
</div>
</div>


    <div class="accordion" id="accordionExample">
        <div class="card">
          <div class="card-header" id="headingOne">
            <h2 class="mb-0">
              <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                Collapsible Group Item #1
              </button>
            </h2>
          </div>

          <div id="collapseOne" class="collapse " aria-labelledby="headingOne" data-parent="#accordionExample">
            <div class="card-body">
              Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-header" id="headingTwo">
            <h2 class="mb-0">
              <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
               METODOS DE PAGO:
              </button>
            </h2>
          </div>
          <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
            <div class="precioypago">
              Hasta 12 cuotas ¡Sin Interes!
            <div class="tarj">
             <img src="img/payments.png" alt="" class="pag-met">
            </div>
          </div>
          </div>
        </div>
        <div class="card">
          <div class="card-header" id="headingThree">
            <h2 class="mb-0">
              <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                Collapsible Group Item #3
              </button>
            </h2>
          </div>
          <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
            <div class="card-body">
              Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
            </div>
          </div>
        </div>
      </div>
</div>
</div>
</div>
</div>




<!-- FOOTER: EMPIEZA -->
<?php require_once 'footer.php';  ?>
<!-- FOOTER: TERMINA -->



</div>











<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</html>
