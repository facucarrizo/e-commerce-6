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




    <!-- Footer con redes sociales-->
    <footer class="page-footer font-small unique-color-dark">
      <div class="footer">
        <div class="container">

          <div class="row py-4 d-flex align-items-center" ;>


            <div class="col-md-12 col-lg-12 text-center text-md-right">
              <!-- Facebook -->
              <a target="_blank" href=http://www.facebook.com class="w-ico fb-ic" style="text-decoration:none" id="facebook">
                <i class="fab fa-facebook-f white-text mr-4"> </i>
              </a>
              <!-- Twitter -->
              <a target="_blank" href=http://twitter.com class="w-ico tw-ic" style="text-decoration:none" id="twitter">
                <i class="fab fa-twitter white-text mr-4"> </i>
              </a>

              <!--Linkedin -->
              <a target="_blank" href=https://ar.linkedin.com/ class="w-ico li-ic" style="text-decoration:none" id="linkedin">
                <i class="fab fa-linkedin-in white-text mr-4"> </i>
              </a>
              <!--Instagram-->
              <a target="_blank" href=https://www.instagram.com/ class="w-ico ins-ic" style="text-decoration:none" id="instagram">
                <i class="fab fa-instagram white-text"> </i>
              </a>
            </div>
             </div> </div> </div> <div class="container text-center text-md-left mt-5 ">
              <div class="row mt-3">
                <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                  <h4 class="text-uppercase font-weight-bold">CASBUSAGI</h4>
                  <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                  <p>
                    <a href="#" style="text-decoration:none">Nuestra historia</a>
                  </p>
                  <p>
                    <a href="Formulario Registro.html" style="text-decoration:none">Como suscribirse</a>
                  </p>
                  <p>
                    <a href="faq.html" style="text-decoration:none">Preguntas frecuentes</a>
                  </p>
                  <p>
                    <a href="#" style="text-decoration:none">Trabaja en nuestro equipo</a>
                  </p>
                  <p>
                    <a href="#" style="text-decoration:none">Guía de talles</a>
                  </p>
                </div>


                <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                  <!-- Links -->
                  <h6 class="text-uppercase font-weight-bold">Productos</h6>
                  <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                  <p>
                    <a href="producto.html" style="text-decoration:none">Nike</a>
                  </p>
                  <p>
                    <a href="producto-adidas.html" style="text-decoration:none">Adidas</a>
                  </p>
                  <p>
                    <a href="producto-vans.html" style="text-decoration:none">Vans</a>
                  </p>

                </div>

                <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4 p-0" >
                  <h6 class="text-uppercase font-weight-bold">Contacto</h6>
                  <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                  <p>
                    <i class="fas fa-envelope mr-3"></i> <a href="mailto:info@casbusagi.com" style="text-decoration:none">info@casbusagi.com</a>
                  </p>
                  <p>
                    <i class="fas fa-phone mr-3"></i> <a href="tel:+54 234 567 88" style="text-decoration:none"> +54 234 567 88</a>
                  </p>
                  <!-- <p>
                    <a href="#!">Mi cuenta</a>
                  </p>
                  <p>
                    <a href="#!">Become an Affiliate</a>
                  </p>
                  <p>
                    <a href="#!">Tasas de envío</a>
                  </p>
                  <p>
                    <a href="#!">Ayuda</a>
                  </p> -->


                </div>

                <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">

                  <h6 class="text-uppercase font-weight-bold"></h6>
                  <!-- <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;"> -->
                    <p>
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3283.3313139806187!2d-58.38386198505181!3d-34.62106686592268!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bccb28ea8781cb%3A0x950feb519009506e!2sLima%201111%2C%20C1073AAW%20CABA!5e0!3m2!1ses-419!2sar!4v1574711262818!5m2!1ses-419!2sar" width="250" height="250" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                    </p>
                </div>
              </div>
          </div>

          <!-- Copyright -->
          <div class="footer-copyright text-center py-3">© 2019 Copyright. Todos los derechos reservados.
            <a href="#" style="text-decoration:none">Politica de privacidad</a>
          </div>
          <!-- Copyright -->

    </footer>

</div>











<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</html>
