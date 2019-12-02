<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="css/Contacto.css">
    <link href="https://fonts.googleapis.com/css?family=Tomorrow&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.css">
    <script src="https://kit.fontawesome.com/67f61afa3e.js" crossorigin="anonymous"></script>

    <title>Contactanos</title>
</head>
<body id="body">
 <!-- Header -->
 <a href="Contacto.html" id="aa" > Contactanos</a>

 <?php require_once"NAV.php" ?>


        <div  id="Todo2">

<div id="Todo">

    <form>
        <b> <h1>Envianos tu Mensaje</h1> </b>
        <div class="form-group">
            <label for="exampleInputPassword1">Tu Nombre</label>
            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Tu Nombre" required>
          </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Dirrecion de Email</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Dirrecion de Email" required>
            <small >No Compartiremos tu Dirrecion de Email </small>
          </div>

        <div class="form-group">
          <label for="exampleFormControlTextarea1">Tu Mensaje</label>
          <textarea class="form-control" id="exampleFormControlTextarea1" rows="6"></textarea>
        </div>
         <button id="hola" type="submit" class="btn btn-secondary btn-lg btn-block">Enviar</button>
      </form>

    </div></div></div></div>




    <!-- FOOTER: EMPIEZA -->
    <?php require_once 'footer.php';  ?>
    <!-- FOOTER: TERMINA -->




      </div>
</body>
</html>
