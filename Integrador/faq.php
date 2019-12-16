<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="https://kit.fontawesome.com/67f61afa3e.js" crossorigin="anonymous"></script>
  <title>CASBUSAGI - Zapatillas al paso</title>
  <link rel="stylesheet" href="css/faq.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/myaccount.css">

</head>
  <body>
      <a href="Contacto.html" id="aa" > Contactanos</a>
      <!-- Header -->


      <div class="">
      <?php require_once"NAV.php" ?>


  <!-- <nav class="navbar navbar-expand-lg navbar-ligth bg-dark">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">
            Dropdown
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
        </li>
      </ul>
      <form class="form-inline my-2 my-lg-0">

        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form>
    </div>
  </nav> -->




<!-- Nav Horizontal -->
<ul class="nav justify-content-center" id="navHorizontal">
  <li class="nav-item">
    <a class="nav-link" href="#item-1" id="bottonNavHorizontal">SOBRE DE MIS COMPRAS</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#item-2" id="bottonNavHorizontal">ACERCA DE MI ENTREGA</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#item-3" id="bottonNavHorizontal">CAMBIOS Y DEVOLUCIONES</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#item-4" id="bottonNavHorizontal">QUIERO CONTACTARME</a>
  </li>
</ul>





<!-- Collapse PREGUNTAS FRECUENTES -->
<div class="accordion" id="accordionExample">

<!-- COMPRA -->
<div class="justify-content-center" data-spy="scroll" data-target="#navbar-example3" data-offset="0">
  <h4 id="item-1">COMPRA</h4>
</div>
<!-- 1º Pregunta -->
  <div class="card">
    <div class="card-header" id="preguntaCompra1">
      <h2 class="mb-0">
        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#compra1" aria-expanded="true" aria-controls="collapseOne" id="preg">
          ¿Como hago para comprar?
        </button>
      </h2>
    </div>
<!-- 1º Respuesta -->
    <div id="compra1" class="collapse" aria-labelledby="preguntaCompra1" data-parent="#accordionExample">
      <div class="card-body">
        Para comprar en CASBUSAGI es muy simple y rápido:
        <ol>
          <li>Entrá en nuestra página, registrate y ya podrás comenzar a comprar. En el supuesto que ya te encuentres registrado sólo tienes que ingresar tu usuario y tu contraseña y ya puedes comenzar a comprar. Si preferís, podes comprar como invitado, sin necesidad de generar una cuenta.
          </li>
          <li>Elige el/los producto/s que más te guste/n, el talle más adecuado y agrégalos al carrito.
          </li>
          <li>Una vez que hayas seleccionado todos los productos, puedes ir al carrito para ver que tu pedido sea el correcto. Puedes modificarlo en caso de ser necesario.
          </li>
          <li>Elige cómo y dónde deseas recibir tu compra.
         </li>
          <li>Selecciona la forma de pago que más te convenga.
          </li>
          <li>Antes de confirmar el pedido, se mostrará la dirección con la que se registró, si quieres cambiar la dirección puedes hacerlo en ese momento. Ante cualquier duda o consulta envíanos un correo electrónico a <a href="mailto:ventasonline@CASBUSAGI.com.ar">ventasonline@casbusagi.com.ar</a>.
         </li>
          <li>Revisá tu pedido por última vez y confírmalo.
          </li>
          <li>En tu pantalla te aparecerá un número de pedido, confirmando que la compra fue realizada con éxito.
          </li>
          <li>Una vez que se acredite tu pago el pedido será procesado y enviado al destino que elegiste. Cuando el pedido se despache desde nuestro depósito recibirás un mail infomando el número de guía de nuestro operador logístico para que puedas hacer el seguimiento correspondiente, si hubieras elegido este método de envío.
          </li>
          <li>En pocos días recibirá el pedido o podrás retirarlo de la sucursal del operador logístico si hubieras elegido esta opción, y podrás comenzar a disfrutar tu compra.
          </li>
        </ol>
      </div>
    </div>
  </div>

<!-- 2º Pregunta -->
  <div class="card">
    <div class="card-header" id="preguntaCompra2">
      <h2 class="mb-0">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#compra2" aria-expanded="false" aria-controls="collapseTwo" id="preg">
          ¿Cuáles son los medios de pagos disponibles?
        </button>
      </h2>
    </div>
<!-- 2º Respuesta -->
    <div id="compra2" class="collapse" aria-labelledby="preguntaCompra2" data-parent="#accordionExample">
      <div class="card-body">
        <ul>
          <li>MERCADO PAGO: Puede ulitizar todas las promociones vigentes disponibles por Mercado Pago por pago con tarjeta en cuotas.
          </li>
          <li>
            EFECTIVO: Podrá concretar el pago en cualquier sucursal de Rapipago, Pago Fácil o Carga Virtual seleccionando Mercado Pago y obetiendo el cupón de pago al finalizar la compra.
          </li>
        </ul>
      </div>
    </div>
  </div>

<!-- 3º Pregunta -->
  <div class="card">
    <div class="card-header" id="preguntaCompra3">
      <h2 class="mb-0">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#compra3" aria-expanded="false" aria-controls="collapseThree" id="preg">
          ¿Cómo puedo hacer para saber que talle me conviene?
        </button>
      </h2>
    </div>
<!-- 3º Respuesta -->
    <div id="compra3" class="collapse" aria-labelledby="preguntaCompra3" data-parent="#accordionExample">
      <div class="card-body">
        Para conocer los talles respectivos debes consultar las tablas de talles que poseemos para los distintos productos clickeando en el botón que encontrarás en cada producto que comercializamos en nuestra tienda. Si la duda sobre tu talle persiste, puedes enviarnos tu consulta: <a href="mailto:ventasonline@CASBUSAGI.com.ar">ventasonline@casbusagi.com.ar</a>.
      </div>
    </div>
  </div>

<!-- 4º Pregunta -->
  <div class="card">
    <div class="card-header" id="preguntaCompra4">
      <h2 class="mb-0">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#compra4" aria-expanded="false" aria-controls="collapseFour" id="preg">
          ¿Cómo utilizo un cupón de crédito / descuento?
        </button>
      </h2>
    </div>
<!-- 4º Respuesta -->
    <div id="compra4" class="collapse" aria-labelledby="preguntaCompra4" data-parent="#accordionExample">
      <div class="card-body">
        A continuación te detallamos los pasos para utilizar tu cupón:
        <ol>
          <li>
            Elegí el producto que querés comprar y agregalo al carro de compras.
          </li>
          <li>
            Ingresá el código del cupón en el campo "Código de Descuento", tal como lo recibiste, respetando mayúsculas, guiones, etc.
          </li>
          <li>
            Ingresá el código y hace click en la opción "Agregar Código". Automáticamente el descuento será aplicado sobre el total de la compra.
          </li>
        </ol>
        IMPORTANTE
        <ul>
          <li>
            El cupón sólo puede ser utilizado durante el proceso de compra. No será posible aplicarlo una vez finalizada la misma.
          </li>
          <li>
            Los cupones pueden tener un plazo de vencimiento.
          </li>
          <li>
            Los cupones de promoción no son acumulables con otras promociones.
          </li>
          <li>
            En caso de haber elegido cupón de crédito, no es posible solicitar luego la anulación del cupón para proceder con el reintegro.
          </li>
        </ul>
      </div>
    </div>
  </div>

<!-- ENTREGAS -->
<div data-spy="scroll" data-target="#navbar-example3" data-offset="0">
  <h4 id="item-2">ENTREGA</h4>
</div>
<!-- 5º Pregunta -->
  <div class="card">
    <div class="card-header" id="preguntaEntrega1">
      <h2 class="mb-0">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#entrega1" aria-expanded="false" aria-controls="collapseThree" id="preg">
          ¿Cómo saber el estado de mi pedido?
        </button>
      </h2>
    </div>
<!-- 5º Respuesta -->
    <div id="entrega1" class="collapse" aria-labelledby="preguntaEntrega1" data-parent="#accordionExample">
      <div class="card-body">
        Una vez que el pedido fue despachado por correo, recibirás un mail con el número de tracking de su pedido para poder seguirlo. Si no recibiste el número de tracking o tenes algun inconveniente, debes enviar un mail a <a href="mailto:ventasonline@CASBUSAGI.com.ar">ventasonline@casbusagi.com.ar</a> para conocer el estado de tu pedido.
     </div>
    </div>
  </div>

<!-- 6º Pregunta -->
  <div class="card">
    <div class="card-header" id="preguntaEntrega2">
      <h2 class="mb-0">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#entrega2" aria-expanded="false" aria-controls="collapseThree" id="preg">
          ¿Cuanto tarda en llegar mi pedido?
        </button>
      </h2>
    </div>
<!-- 6º Respuesta -->
    <div id="entrega2" class="collapse" aria-labelledby="preguntaEntrega2" data-parent="#accordionExample">
      <div class="card-body">
        Es importante tomar en cuenta que los tiempos de entrega para Capital Federal y Gran Buenos Aires son hasta 5 días hábiles posterior a la confirmación de pago desde nuestro proveedor de pago. Para el resto del país los plazos de entrega se extienden hasta 10 días más.
      </div>
    </div>
  </div>

<!-- 7º Pregunta -->
  <div class="card">
    <div class="card-header" id="preguntaEntrega3">
      <h2 class="mb-0">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#entrega3" aria-expanded="false" aria-controls="collapseThree" id="preg">
          ¿En qué días y horarios se entregan los pedidos?
        </button>
      </h2>
    </div>
<!-- 7º Respuesta -->
    <div id="entrega3" class="collapse" aria-labelledby="preguntaEntrega3" data-parent="#accordionExample">
      <div class="card-body">
Las entregas de pedidos se realizan de lunes a viernes de 8:00 a 20:00, y sábados de 8:00 a 12:00. No se entregan pedidos los días domingos ni feriados, ni los días de paro de transporte.
      </div>
    </div>
  </div>

<!-- 8º Pregunta -->
  <div class="card">
    <div class="card-header" id="preguntaEntrega4">
      <h2 class="mb-0">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#entrega4" aria-expanded="false" aria-controls="collapseThree" id="preg">
          ¿Puede otra persona recibir mi pedido?
        </button>
      </h2>
    </div>
<!-- 8º Respuesta -->
    <div id="entrega4" class="collapse" aria-labelledby="preguntaEntrega4" data-parent="#accordionExample">
      <div class="card-body">
        Sí, cualquier persona de mayor de edad puede recibir la mercadería siempre que se encuentre en el domicilio de entrega indicado. Para retirar tu compra desde alguna sucursal del correo debes mostrar tu DNI y la confirmación de compra o despacho que te enviamos a tu mail.
      </div>
    </div>
  </div>

<!-- CAMBIO Y DEVOLUCION -->
<div data-spy="scroll" data-target="#navbar-example3" data-offset="0">
  <h4 id="item-3">CAMBIOS</h4>
</div>
<!-- 9º Pregunta -->
  <div class="card">
    <div class="card-header" id="preguntaCambioDevolucion1">
      <h2 class="mb-0">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#cambio1" aria-expanded="false" aria-controls="collapseThree" id="preg">
          ¿Cómo hago para realizar un cambio?
        </button>
      </h2>
    </div>
<!-- 9º Respuesta -->
    <div id="cambio1" class="collapse" aria-labelledby="preguntaCambioDevolucion1" data-parent="#accordionExample">
      <div class="card-body">
        Contactándote con el Centro de Atención al Cliente o bien enviando un mail a <a href="mailto:ventasonline@CASBUSAGI.com.ar">ventasonline@casbusagi.com.ar</a> indicando tu número de pedido.
      </div>
    </div>
  </div>

<!-- 10º Pregunta -->
  <div class="card">
    <div class="card-header" id="preguntaCambioDevolucion2">
      <h2 class="mb-0">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#cambio2" aria-expanded="false" aria-controls="collapseThree" id="preg">
          ¿Cuánto tiempo tengo para realizar un cambio?
        </button>
      </h2>
    </div>
<!-- 10º Respuesta -->
    <div id="cambio2" class="collapse" aria-labelledby="preguntaCambioDevolucion2" data-parent="#accordionExample">
      <div class="card-body">
        Tienes 30 días corridos luego de haber recibido el producto para empezar la gestión del cambio de mercadería, respetando todas las condiciones exigidas para realizar el cambio.
      </div>
    </div>
  </div>

<!-- ATENCION AL CLIENTE -->
<div data-spy="scroll" data-target="#navbar-example3" data-offset="0">
  <h4 id="item-4">CONTACTANOS</h4>
</div>
<!-- 11º Pregunta -->
  <div class="card">
    <div class="card-header" id="preguntaCliente1">
      <h2 class="mb-0">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#cliente1" aria-expanded="false" aria-controls="collapseThree" id="preg">
          ¿Cuál es el horario de atención al cliente?
        </button>
      </h2>
    </div>
<!-- 11º Respuesta -->
    <div id="cliente1" class="collapse" aria-labelledby="preguntaCliente1" data-parent="#accordionExample">
      <div class="card-body">
        El horario de Atención al cliente es de Lunes a Viernes de 8 a 17 hs.
      </div>
    </div>
  </div>

<!-- 12º Pregunta -->
  <div class="card">
    <div class="card-header" id="preguntaCliente2">
      <h2 class="mb-0">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#cliente2" aria-expanded="false" aria-controls="collapseThree" id="preg">
          ¿Cómo hago para contactarme?
        </button>
      </h2>
    </div>
  <!-- 12º Respuesta -->
        <div id="cliente2" class="collapse" aria-labelledby="preguntaCliente2" data-parent="#accordionExample">
          <div class="card-body">
            Puedes contactarnos a través de la dirección de correo <a href="mailto:ventasonline@CASBUSAGI.com.ar">ventasonline@casbusagi.com.ar</a> o bien telefónicamente al <a href="tel:0123456788">+ 01 234 567 88</a>
          </div>
        </div>
      </div>



</div>

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
