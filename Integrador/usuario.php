<!-- Falta capturar el dato de paìs por $_POST y retornarlo en su campo -->
<!-- poder editar informaciòn "alias,  calles etc." ò agregarlas al formulario y tomarlas de ahi -->
<!--  -->

<?php
session_start();
//require_once('funciones.php');

?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
      integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
      crossorigin="anonymous"
    />

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
   <link rel="stylesheet" href="css/style.css">
    <script
      src="https://kit.fontawesome.com/67f61afa3e.js"
      crossorigin="anonymous"
    ></script>
    <title>Perfil de Usuario</title>
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/myaccount.css" />
  </head>

  <body>
      <a href="Contacto.html" id="aa" > Contactanos</a>



      <?php require_once"NAV.php" ?>





      <!--!ACA EMPIEZA MYACCOUNT.//-->
      <section class="card-account section-pagetop bg">
        <div class="">
          <h2 class="title-page">Mi Perfil</h2>
        </div>
  </section>
        <!-- container //  -->

    <div class="mx-5">
      <section class="section-content padding-y">
        <div class="">
          <div class="row">
            <aside class="col-md-2">
              <div class=" list-group" id="myList" role="tablist">

                <a
                  class="card-account list-group-item"
                  data-toggle="list"
                  href="#miPerfil"
                  role="tab"
                >
                  Mi Perfil
                </a>
                <a
                  class="card-account list-group-item"
                  data-toggle="list"
                  href="#guardados"
                  role="tab"
                >
                  Guardados
                </a>
                <a
                  class="card-account list-group-item"
                  data-toggle="list"
                  href="#misCompras"
                  role="tab"
                >
                  Mis Compras
                </a>
                <!-- <a class="list-group-item" href="#"> My misCompras</a>
                <a class="list-group-item" href="#">Settings </a> -->
                <!-- <a class="list-group-item" href="#"> My Selling Items </a>
                     <a class="list-group-item" href="#"> Received orders </a> -->
              </div>
            </aside>
            <!-- col.// -->
            <main class="col-md-10">
              <div class="tab-content">
                <div class="tab-pane active" id="miPerfil" role="tabpanel">
                  <article class="card mb-3">
                    <div class="card-account card-body">
                      <figure class="icontext">
                        <div class="icon">
                          <img
                            class="rounded-circle img-sm bordero"
                            src="archivos/<?= datosUsuario('avatar')['name']?>"
                          />
                        </div>
                        <div class="text">
                          <strong> <?= $_SESSION["nombre"];?> </strong> <br />
                          <?= $_SESSION['email'];?><br />
                          <a href="#" class="btn-link"> Editar</a>
                        </div>
                      </figure>
                     <hr />   <!--  borrar -->

                    <p>
                        <i class="fa fa-map-marker text-muted" aria-hidden="true"></i> &nbsp; Mis
                        Direcciones
                        <br>
                    </p>
                    <div role="tabpanel" class="tab-pane" id="address">
                            <div class="row">
                                <div class="col-md-6">
                                    <a href="" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">Nueva Dirección</a>
                                </div>
                            </div>
                             <table class="table table-responsive">
                                <thead>
                                    <tr><th>Alias</th>
                                    <th>Calles</th>
                                    <th>Ciudad</th>
                                                                        <!-- <th>State</th> -->
                                    <th>País</th>
                                    <th>Cód. Postal</th>
                                    <th>Télefono</th>
                                    <th>Acciones</th>
                                </tr>
                                </thead>
                                <tbody>
                                        <tr>
                                            <td><?= $_SESSION['alias']; ?></td>
                                            <td><?= $_SESSION['calle']?></td>
                                            <td><?= $_SESSION['ciudad']?></td>
                                                                                        <!-- <td></td> -->
                                            <td><?= $_SESSION['pais']?></td>
                                            <td><?= $_SESSION['postal'];?></td>
                                            <td><?= $_SESSION['telefono']; ?></td>
                                            <td>
                                                <form method="post" action="https://shop.laracom.net/customer/1231/address/755" class="form-horizontal">
                                                    <div class="btn-group">
                                                        <input type="hidden" name="_method" value="delete">
                                                        <input type="hidden" name="_token" value="HDtXA86dfpZzb97wkjnrjjp50OZFw9SoK7tmbFIP">
                                                        <a href="" class="btn btn-primary"> <i class="fa fa-pencil"></i> Editar</a>
                                                        <button onclick="return confirmar('Are you sure?')" type="submit" class="btn btn-danger"> <i class="fa fa-trash"></i> Eliminar</button>
                                                    </div>
                                                </form>
                                            </td>
                                        </tr>
                                </tbody>
                            </table>
                </div>
                      <article class="card-group">
                        <figure class="card bg stats">
                          <div class="p-3">
                            <h5 class="card-title">38</h5>
                            <span>Mis Compras</span>
                          </div>
                        </figure>
                        <figure class="card bg stats">
                          <div class="p-3">
                            <h5 class="card-title">5</h5>
                            <span>Guardados</span>
                          </div>
                        </figure>
                        <figure class="card bg stats">
                          <div class="p-3">
                            <h5 class="card-title">12</h5>
                            <span>En espera</span>
                          </div>
                        </figure>
                        <figure class="card bg stats">
                          <div class="p-3">
                            <h5 class="card-title">50</h5>
                            <span>Items entregados</span>
                          </div>
                        </figure>
                      </article>
                    </div>  <!-- cierra card account linea88-->
                    <!-- card-body .// -->
                  </article>
                  <!-- card.// -->


                </div>
                <div class="tab-pane" id="guardados" role="tabpanel">
                  <article class="card mb-3">
                    <div class="card-account card-body">
                  <div class="card-account card">
<table class="table table-borderless table-shopping-cart">
<thead class="text-muted">
<tr class="small text-uppercase">
  <th scope="col">Producto</th>
  <th scope="col" width="120">Cantidad</th>
  <th scope="col" width="120">Precio</th>
  <th scope="col" class="text-right" width="200"> </th>
</tr>
</thead>
<tbody>
<tr>
	<td>
		<figure class="itemside">
			<div class="aside"><img src="img/images2.jfif" class="img-sm"></div>
			<figcaption class="info">
				<a href="#" class="title text-dark">Nombre del Producto</a>
				<p class="text-muted small">Talle: XL, Color: Azul, <br> Marca: Gucci</p>
			</figcaption>
		</figure>
	</td>
	<td>
		<select class="form-control">
			<option>1</option>
			<option>2</option>
			<option>3</option>
			<option>4</option>
		</select>
	</td>
	<td>
		<div class="price-wrap">
			<var class="price">$1156.00</var>
			<small class="text-muted"> $315.20 c/u </small>
		</div> <!-- price-wrap .// -->
	</td>
	<td class="text-right">
	<a data-original-title="Save to Wishlist" title="" href="" class="btn btn-light" data-toggle="tooltip"> <i class="fa fa-heart"></i></a>
	<a href="" class="btn btn-light"> Eliminar</a>
	</td>
</tr>
<tr>
	<td>
		<figure class="itemside">
			<div class="aside"><img src="img/images2.jfif" class="img-sm"></div>
			<figcaption class="info">
				<a href="#" class="title text-dark">Nombre del Producto</a>
				<p class="text-muted small">Talle: XL, Color: Azul, <br> Marca: Gucci</p>
			</figcaption>
		</figure>
	</td>
	<td>
		<select class="form-control">
			<option>1</option>
			<option>2</option>
			<option>3</option>
			<option>4</option>
		</select>
	</td>
	<td>
		<div class="price-wrap">
			<var class="price">$149.97</var>
			<small class="text-muted"> $75.00 c/u </small>
		</div> <!-- price-wrap .// -->
	</td>
	<td class="text-right">
	<a data-original-title="Save to Wishlist" title="" href="" class="btn btn-light" data-toggle="tooltip"> <i class="fa fa-heart"></i></a>
	<a href="" class="btn btn-light btn-round"> Eliminar</a>
	</td>
</tr>
<tr>
	<td>
		<figure class="itemside">
			<div class="aside"><img src="img/images.jfif" class="img-sm"></div>
			<figcaption class="info">
				<a href="#" class="title text-dark">Nombre del Producto</a>
				<p class="small text-muted">Talle: XL, Color: Azul, <br> Marca: Gucci</p>
			</figcaption>
		</figure>
	</td>
	<td>
		<select class="form-control">
			<option>1</option>
			<option>2</option>
			<option>3</option>
		</select>
	</td>
	<td>
		<div class="price-wrap">
			<var class="price">$98.00</var>
			<small class="text-muted"> $578.00 c/u</small>
		</div> <!-- price-wrap .// -->
	</td>
	<td class="text-right">
		<a data-original-title="Save to Wishlist" title="" href="" class="btn btn-light" data-toggle="tooltip"> <i class="fa fa-heart"></i></a>
		<a href="" class="btn btn-light btn-round"> Eliminar</a>
	</td>
</tr>
</tbody>
</table>
<div class="card-body border-top">
	<!-- <a href="#" class="btn btn-primary float-md-right"> Make Purchase <i class="fa fa-chevron-right"></i> </a> -->
	<a href="index.html" class="btn btn-light"> <i class="fa fa-chevron-left"></i> Seguir comprando </a>
</div>
</div> <!-- card.// -->
<div class="alert alert-success mt-3">
	<p class="icontext"><i class="icon text-success fa fa-truck"></i> Envios gratis entre 1-2 semanas</p>
</div>
                </div>
                </article>

                </div>
                <div role="tabpanel" class="tab-pane cardigreen " id="misCompras">
                  <article class="card-mb3">
                    <div class="card-account card-body">
                      <div class="card-account card">
                                                 <table class="table table-borderless ">
                                <tbody>
                                <tr id="text-uppercase">
                                    <td >Date</td>
                                    <td>Total</td>
                                    <td>Estado</td>
                                </tr>
                                </tbody>
                                <tbody>
                                                                    <tr>
                                        <td>
                                            <a data-toggle="modal" data-target="#order_modal_411" title="Show order" href="javascript: void(0)">Nov 22, 2019 04:13 am</a>
                                            <!-- Button trigger modal -->
                                            <!-- Modal -->
                                            <div class="modal fade" id="order_modal_411" tabindex="-1" role="dialog" aria-labelledby="MyOrders">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
                                                            </button>
                                                            <h4 style="text-align: center;" class="modal-title" id="myModalLabel">Numero de Referencia#59bb23ae-a6a8-4225-a4ea-ee96f83bdf2f</h4>
                                                        </div>
                                                        <div class="modal-body">
                                                            <table class="table">
                                                                <thead>
                                                                    <tr><th>Direccion</th>
                                                                    <th>Metodo de Pago</th>
                                                                    <th>Total</th>
                                                                    <th>Estado</th>
                                                                </tr></thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <td>
                                                                            <address>
                                                                                <strong>Casa</strong><br>
                                                                                Tte. Gral. J. D. Perón 1730 Piso 13 Dpto. "115"<br>
                                                                            </address>
                                                                        </td>
                                                                        <td>Transferecia Bancaria</td>
                                                                        <td>$ 5.00</td>
                                                                        <td><p class="text-center" style="color: #000000; background-color:rgb(211, 197, 77)">Comprado</p></td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-default" data-dismiss="modal">Cerra</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td><span class="label  label-danger ">USD 5.00</span></td>
                                        <td><p class="text-center" style="color: #000000; background-color: rgb(211, 197, 77)">Comprado</p></td>
                                    </tr>
                                                                </tbody>
                            </table>
                      </div>
                    </div>
                  </article>


                                                    </div>


              <!-- card.// -->
            </main>
            <!-- col.// -->
          </div>
        </div>
        <!-- container .//  -->
      </section>

<!--!ACA TERMINA MYACCOUNT.//-->

      <!--container.//-->

      <br /><br /><br />
   </div>
   </div>  <!--cierra mx-5-->


      <!-- <article class="bg-secondary mb-3">
        <div class="card-body text-center">
          <h4 class="text-white">
            HTML UI KIT <br />
            Ready to use Bootstrap 4 components and templates
          </h4>
          <p class="h5 text-white">
            for Ecommerce, marketplace, booking websites and product landing
            pages
          </p>
          <br />
          <p>
            <a
              class="btn btn-warning"
              target="_blank"
              href="http://bootstrap-ecommerce.com/"
            >
              Bootstrap-ecommerce.com <i class="fa fa-window-restore "></i
            ></a>
          </p>
        </div>
        <br /><br /><br />
      </article> -->


  <!--? Launch demo modal -->
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">Nueva Direccion</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="box">
            <form action="https://shop.laracom.net/customer/1233/address" method="post" class="form" enctype="multipart/form-data">
                <input type="hidden" name="status" value="1">
                <div class="box-body">
                    <input type="hidden" name="_token" value="7j8cbkgujgr76T0YHq9DiHbbw2jxAwTpemFwRW0P">
                    <div class="form-group">
                        <label for="alias">Nombre <span class="text-danger">*</span></label>
                        <input type="text" name="alias" id="alias" placeholder="Casa u Oficina" class="form-control" value="">
                    </div>
                    <div class="form-group">
                        <label for="address_1">Direccion 1 <span class="text-danger">*</span></label>
                        <input type="text" name="address_1" id="address_1" placeholder="Direccion 1" class="form-control" value="">
                    </div>
                    <div class="form-group">
                        <label for="address_2">Direccion 2 </label>
                        <input type="text" name="address_2" id="address_2" placeholder="Direccion 2" class="form-control" value="">
                    </div>
                    <div class="form-group">
                        <label for="country_id">Pais </label>
                        <select name="country_id" id="country_id" class="form-control select2 select2-hidden-accessible" data-select2-id="country_id" tabindex="-1" aria-hidden="true">
                                                            <option value="1" data-select2-id="3">AFGHANISTAN</option>
                                                            <option value="2" data-select2-id="4">ALBANIA</option>
                                                            <option value="3" data-select2-id="5">ALGERIA</option>
                                                            <option value="4" data-select2-id="6">AMERICAN SAMOA</option>
                                                            <option value="5" data-select2-id="7">ANDORRA</option>
                                                            <option value="6" data-select2-id="8">ANGOLA</option>
                                                            <option value="7" data-select2-id="9">ANGUILLA</option>
                                                            <option value="8" data-select2-id="10">ANTARCTICA</option>
                                                            <option value="9" data-select2-id="11">ANTIGUA AND BARBUDA</option>
                                                            <option selected="selected" value="10" data-select2-id="12">ARGENTINA</option>
                                                            <option value="11" data-select2-id="13">ARMENIA</option>
                                                            <option value="12" data-select2-id="14">ARUBA</option>
                                                            <option value="13" data-select2-id="15">AUSTRALIA</option>
                                                            <option value="14" data-select2-id="16">AUSTRIA</option>
                                                            <option value="15" data-select2-id="17">AZERBAIJAN</option>
                                                            <option value="16" data-select2-id="18">BAHAMAS</option>
                                                            <option value="17" data-select2-id="19">BAHRAIN</option>
                                                            <option value="18" data-select2-id="20">BANGLADESH</option>
                                                            <option value="19" data-select2-id="21">BARBADOS</option>
                                                            <option value="20" data-select2-id="22">BELARUS</option>
                                                            <option value="21" data-select2-id="23">BELGIUM</option>
                                                            <option value="22" data-select2-id="24">BELIZE</option>
                                                            <option value="23" data-select2-id="25">BENIN</option>
                                                            <option value="24" data-select2-id="26">BERMUDA</option>
                                                            <option value="25" data-select2-id="27">BHUTAN</option>
                                                            <option value="26" data-select2-id="28">BOLIVIA</option>
                                                            <option value="27" data-select2-id="29">BOSNIA AND HERZEGOVINA</option>
                                                            <option value="28" data-select2-id="30">BOTSWANA</option>
                                                            <option value="29" data-select2-id="31">BOUVET ISLAND</option>
                                                            <option value="30" data-select2-id="32">BRAZIL</option>
                                                            <option value="31" data-select2-id="33">BRITISH INDIAN OCEAN TERRITORY</option>
                                                            <option value="32" data-select2-id="34">BRUNEI DARUSSALAM</option>
                                                            <option value="33" data-select2-id="35">BULGARIA</option>
                                                            <option value="34" data-select2-id="36">BURKINA FASO</option>
                                                            <option value="35" data-select2-id="37">BURUNDI</option>
                                                            <option value="36" data-select2-id="38">CAMBODIA</option>
                                                            <option value="37" data-select2-id="39">CAMEROON</option>
                                                            <option value="38" data-select2-id="40">CANADA</option>
                                                            <option value="39" data-select2-id="41">CAPE VERDE</option>
                                                            <option value="40" data-select2-id="42">CAYMAN ISLANDS</option>
                                                            <option value="41" data-select2-id="43">CENTRAL AFRICAN REPUBLIC</option>
                                                            <option value="42" data-select2-id="44">CHAD</option>
                                                            <option value="43" data-select2-id="45">CHILE</option>
                                                            <option value="44" data-select2-id="46">CHINA</option>
                                                            <option value="45" data-select2-id="47">CHRISTMAS ISLAND</option>
                                                            <option value="46" data-select2-id="48">COCOS (KEELING) ISLANDS</option>
                                                            <option value="47" data-select2-id="49">COLOMBIA</option>
                                                            <option value="48" data-select2-id="50">COMOROS</option>
                                                            <option value="49" data-select2-id="51">CONGO</option>
                                                            <option value="50" data-select2-id="52">CONGO, THE DEMOCRATIC REPUBLIC OF THE</option>
                                                            <option value="51" data-select2-id="53">COOK ISLANDS</option>
                                                            <option value="52" data-select2-id="54">COSTA RICA</option>
                                                            <option value="53" data-select2-id="55">COTE D'IVOIRE</option>
                                                            <option value="54" data-select2-id="56">CROATIA</option>
                                                            <option value="55" data-select2-id="57">CUBA</option>
                                                            <option value="56" data-select2-id="58">CYPRUS</option>
                                                            <option value="57" data-select2-id="59">CZECH REPUBLIC</option>
                                                            <option value="58" data-select2-id="60">DENMARK</option>
                                                            <option value="59" data-select2-id="61">DJIBOUTI</option>
                                                            <option value="60" data-select2-id="62">DOMINICA</option>
                                                            <option value="61" data-select2-id="63">DOMINICAN REPUBLIC</option>
                                                            <option value="62" data-select2-id="64">ECUADOR</option>
                                                            <option value="63" data-select2-id="65">EGYPT</option>
                                                            <option value="64" data-select2-id="66">EL SALVADOR</option>
                                                            <option value="65" data-select2-id="67">EQUATORIAL GUINEA</option>
                                                            <option value="66" data-select2-id="68">ERITREA</option>
                                                            <option value="67" data-select2-id="69">ESTONIA</option>
                                                            <option value="68" data-select2-id="70">ETHIOPIA</option>
                                                            <option value="69" data-select2-id="71">FALKLAND ISLANDS (MALVINAS)</option>
                                                            <option value="70" data-select2-id="72">FAROE ISLANDS</option>
                                                            <option value="71" data-select2-id="73">FIJI</option>
                                                            <option value="72" data-select2-id="74">FINLAND</option>
                                                            <option value="73" data-select2-id="75">FRANCE</option>
                                                            <option value="74" data-select2-id="76">FRENCH GUIANA</option>
                                                            <option value="75" data-select2-id="77">FRENCH POLYNESIA</option>
                                                            <option value="76" data-select2-id="78">FRENCH SOUTHERN TERRITORIES</option>
                                                            <option value="77" data-select2-id="79">GABON</option>
                                                            <option value="78" data-select2-id="80">GAMBIA</option>
                                                            <option value="79" data-select2-id="81">GEORGIA</option>
                                                            <option value="80" data-select2-id="82">GERMANY</option>
                                                            <option value="81" data-select2-id="83">GHANA</option>
                                                            <option value="82" data-select2-id="84">GIBRALTAR</option>
                                                            <option value="83" data-select2-id="85">GREECE</option>
                                                            <option value="84" data-select2-id="86">GREENLAND</option>
                                                            <option value="85" data-select2-id="87">GRENADA</option>
                                                            <option value="86" data-select2-id="88">GUADELOUPE</option>
                                                            <option value="87" data-select2-id="89">GUAM</option>
                                                            <option value="88" data-select2-id="90">GUATEMALA</option>
                                                            <option value="89" data-select2-id="91">GUINEA</option>
                                                            <option value="90" data-select2-id="92">GUINEA-BISSAU</option>
                                                            <option value="91" data-select2-id="93">GUYANA</option>
                                                            <option value="92" data-select2-id="94">HAITI</option>
                                                            <option value="93" data-select2-id="95">HEARD ISLAND AND MCDONALD ISLANDS</option>
                                                            <option value="94" data-select2-id="96">HOLY SEE (VATICAN CITY STATE)</option>
                                                            <option value="95" data-select2-id="97">HONDURAS</option>
                                                            <option value="96" data-select2-id="98">HONG KONG</option>
                                                            <option value="97" data-select2-id="99">HUNGARY</option>
                                                            <option value="98" data-select2-id="100">ICELAND</option>
                                                            <option value="99" data-select2-id="101">INDIA</option>
                                                            <option value="100" data-select2-id="102">INDONESIA</option>
                                                            <option value="101" data-select2-id="103">IRAN, ISLAMIC REPUBLIC OF</option>
                                                            <option value="102" data-select2-id="104">IRAQ</option>
                                                            <option value="103" data-select2-id="105">IRELAND</option>
                                                            <option value="104" data-select2-id="106">ISRAEL</option>
                                                            <option value="105" data-select2-id="107">ITALY</option>
                                                            <option value="106" data-select2-id="108">JAMAICA</option>
                                                            <option value="107" data-select2-id="109">JAPAN</option>
                                                            <option value="108" data-select2-id="110">JORDAN</option>
                                                            <option value="109" data-select2-id="111">KAZAKHSTAN</option>
                                                            <option value="110" data-select2-id="112">KENYA</option>
                                                            <option value="111" data-select2-id="113">KIRIBATI</option>
                                                            <option value="112" data-select2-id="114">KOREA, DEMOCRATIC PEOPLE'S REPUBLIC OF</option>
                                                            <option value="113" data-select2-id="115">KOREA, REPUBLIC OF</option>
                                                            <option value="114" data-select2-id="116">KUWAIT</option>
                                                            <option value="115" data-select2-id="117">KYRGYZSTAN</option>
                                                            <option value="116" data-select2-id="118">LAO PEOPLE'S DEMOCRATIC REPUBLIC</option>
                                                            <option value="117" data-select2-id="119">LATVIA</option>
                                                            <option value="118" data-select2-id="120">LEBANON</option>
                                                            <option value="119" data-select2-id="121">LESOTHO</option>
                                                            <option value="120" data-select2-id="122">LIBERIA</option>
                                                            <option value="121" data-select2-id="123">LIBYAN ARAB JAMAHIRIYA</option>
                                                            <option value="122" data-select2-id="124">LIECHTENSTEIN</option>
                                                            <option value="123" data-select2-id="125">LITHUANIA</option>
                                                            <option value="124" data-select2-id="126">LUXEMBOURG</option>
                                                            <option value="125" data-select2-id="127">MACAO</option>
                                                            <option value="126" data-select2-id="128">MACEDONIA, THE FORMER YUGOSLAV REPUBLIC OF</option>
                                                            <option value="127" data-select2-id="129">MADAGASCAR</option>
                                                            <option value="128" data-select2-id="130">MALAWI</option>
                                                            <option value="129" data-select2-id="131">MALAYSIA</option>
                                                            <option value="130" data-select2-id="132">MALDIVES</option>
                                                            <option value="131" data-select2-id="133">MALI</option>
                                                            <option value="132" data-select2-id="134">MALTA</option>
                                                            <option value="133" data-select2-id="135">MARSHALL ISLANDS</option>
                                                            <option value="134" data-select2-id="136">MARTINIQUE</option>
                                                            <option value="135" data-select2-id="137">MAURITANIA</option>
                                                            <option value="136" data-select2-id="138">MAURITIUS</option>
                                                            <option value="137" data-select2-id="139">MAYOTTE</option>
                                                            <option value="138" data-select2-id="140">MEXICO</option>
                                                            <option value="139" data-select2-id="141">MICRONESIA, FEDERATED STATES OF</option>
                                                            <option value="140" data-select2-id="142">MOLDOVA, REPUBLIC OF</option>
                                                            <option value="141" data-select2-id="143">MONACO</option>
                                                            <option value="142" data-select2-id="144">MONGOLIA</option>
                                                            <option value="143" data-select2-id="145">MONTSERRAT</option>
                                                            <option value="144" data-select2-id="146">MOROCCO</option>
                                                            <option value="145" data-select2-id="147">MOZAMBIQUE</option>
                                                            <option value="146" data-select2-id="148">MYANMAR</option>
                                                            <option value="147" data-select2-id="149">NAMIBIA</option>
                                                            <option value="148" data-select2-id="150">NAURU</option>
                                                            <option value="149" data-select2-id="151">NEPAL</option>
                                                            <option value="150" data-select2-id="152">NETHERLANDS</option>
                                                            <option value="151" data-select2-id="153">NETHERLANDS ANTILLES</option>
                                                            <option value="152" data-select2-id="154">NEW CALEDONIA</option>
                                                            <option value="153" data-select2-id="155">NEW ZEALAND</option>
                                                            <option value="154" data-select2-id="156">NICARAGUA</option>
                                                            <option value="155" data-select2-id="157">NIGER</option>
                                                            <option value="156" data-select2-id="158">NIGERIA</option>
                                                            <option value="157" data-select2-id="159">NIUE</option>
                                                            <option value="158" data-select2-id="160">NORFOLK ISLAND</option>
                                                            <option value="159" data-select2-id="161">NORTHERN MARIANA ISLANDS</option>
                                                            <option value="160" data-select2-id="162">NORWAY</option>
                                                            <option value="161" data-select2-id="163">OMAN</option>
                                                            <option value="162" data-select2-id="164">PAKISTAN</option>
                                                            <option value="163" data-select2-id="165">PALAU</option>
                                                            <option value="164" data-select2-id="166">PALESTINIAN TERRITORY, OCCUPIED</option>
                                                            <option value="165" data-select2-id="167">PANAMA</option>
                                                            <option value="166" data-select2-id="168">PAPUA NEW GUINEA</option>
                                                            <option value="167" data-select2-id="169">PARAGUAY</option>
                                                            <option value="168" data-select2-id="170">PERU</option>
                                                            <option  value="169" data-select2-id="2">PHILIPPINES</option>
                                                            <option value="170" data-select2-id="171">PITCAIRN</option>
                                                            <option value="171" data-select2-id="172">POLAND</option>
                                                            <option value="172" data-select2-id="173">PORTUGAL</option>
                                                            <option value="173" data-select2-id="174">PUERTO RICO</option>
                                                            <option value="174" data-select2-id="175">QATAR</option>
                                                            <option value="175" data-select2-id="176">REUNION</option>
                                                            <option value="176" data-select2-id="177">ROMANIA</option>
                                                            <option value="177" data-select2-id="178">RUSSIAN FEDERATION</option>
                                                            <option value="178" data-select2-id="179">RWANDA</option>
                                                            <option value="179" data-select2-id="180">SAINT HELENA</option>
                                                            <option value="180" data-select2-id="181">SAINT KITTS AND NEVIS</option>
                                                            <option value="181" data-select2-id="182">SAINT LUCIA</option>
                                                            <option value="182" data-select2-id="183">SAINT PIERRE AND MIQUELON</option>
                                                            <option value="183" data-select2-id="184">SAINT VINCENT AND THE GRENADINES</option>
                                                            <option value="184" data-select2-id="185">SAMOA</option>
                                                            <option value="185" data-select2-id="186">SAN MARINO</option>
                                                            <option value="186" data-select2-id="187">SAO TOME AND PRINCIPE</option>
                                                            <option value="187" data-select2-id="188">SAUDI ARABIA</option>
                                                            <option value="188" data-select2-id="189">SENEGAL</option>
                                                            <option value="189" data-select2-id="190">SERBIA AND MONTENEGRO</option>
                                                            <option value="190" data-select2-id="191">SEYCHELLES</option>
                                                            <option value="191" data-select2-id="192">SIERRA LEONE</option>
                                                            <option value="192" data-select2-id="193">SINGAPORE</option>
                                                            <option value="193" data-select2-id="194">SLOVAKIA</option>
                                                            <option value="194" data-select2-id="195">SLOVENIA</option>
                                                            <option value="195" data-select2-id="196">SOLOMON ISLANDS</option>
                                                            <option value="196" data-select2-id="197">SOMALIA</option>
                                                            <option value="197" data-select2-id="198">SOUTH AFRICA</option>
                                                            <option value="198" data-select2-id="199">SOUTH GEORGIA AND THE SOUTH SANDWICH ISLANDS</option>
                                                            <option value="199" data-select2-id="200">SPAIN</option>
                                                            <option value="200" data-select2-id="201">SRI LANKA</option>
                                                            <option value="201" data-select2-id="202">SUDAN</option>
                                                            <option value="202" data-select2-id="203">SURINAME</option>
                                                            <option value="203" data-select2-id="204">SVALBARD AND JAN MAYEN</option>
                                                            <option value="204" data-select2-id="205">SWAZILAND</option>
                                                            <option value="205" data-select2-id="206">SWEDEN</option>
                                                            <option value="206" data-select2-id="207">SWITZERLAND</option>
                                                            <option value="207" data-select2-id="208">SYRIAN ARAB REPUBLIC</option>
                                                            <option value="208" data-select2-id="209">TAIWAN, PROVINCE OF CHINA</option>
                                                            <option value="209" data-select2-id="210">TAJIKISTAN</option>
                                                            <option value="210" data-select2-id="211">TANZANIA, UNITED REPUBLIC OF</option>
                                                            <option value="211" data-select2-id="212">THAILAND</option>
                                                            <option value="212" data-select2-id="213">TIMOR-LESTE</option>
                                                            <option value="213" data-select2-id="214">TOGO</option>
                                                            <option value="214" data-select2-id="215">TOKELAU</option>
                                                            <option value="215" data-select2-id="216">TONGA</option>
                                                            <option value="216" data-select2-id="217">TRINIDAD AND TOBAGO</option>
                                                            <option value="217" data-select2-id="218">TUNISIA</option>
                                                            <option value="218" data-select2-id="219">TURKEY</option>
                                                            <option value="219" data-select2-id="220">TURKMENISTAN</option>
                                                            <option value="220" data-select2-id="221">TURKS AND CAICOS ISLANDS</option>
                                                            <option value="221" data-select2-id="222">TUVALU</option>
                                                            <option value="222" data-select2-id="223">UGANDA</option>
                                                            <option value="223" data-select2-id="224">UKRAINE</option>
                                                            <option value="224" data-select2-id="225">UNITED ARAB EMIRATES</option>
                                                            <option value="225" data-select2-id="226">UNITED KINGDOM</option>
                                                            <option value="226" data-select2-id="227">UNITED STATES OF AMERICA</option>
                                                            <option value="227" data-select2-id="228">UNITED STATES MINOR OUTLYING ISLANDS</option>
                                                            <option value="228" data-select2-id="229">URUGUAY</option>
                                                            <option value="229" data-select2-id="230">UZBEKISTAN</option>
                                                            <option value="230" data-select2-id="231">VANUATU</option>
                                                            <option value="231" data-select2-id="232">VENEZUELA</option>
                                                            <option value="232" data-select2-id="233">VIET NAM</option>
                                                            <option value="233" data-select2-id="234">VIRGIN ISLANDS, BRITISH</option>
                                                            <option value="234" data-select2-id="235">VIRGIN ISLANDS, U.S.</option>
                                                            <option value="235" data-select2-id="236">WALLIS AND FUTUNA</option>
                                                            <option value="236" data-select2-id="237">WESTERN SAHARA</option>
                                                            <option value="237" data-select2-id="238">YEMEN</option>
                                                            <option value="238" data-select2-id="239">ZAMBIA</option>
                                                            <option value="239" data-select2-id="240">ZIMBABWE</option>
                                                    </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="245" style="width: 1140px;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-country_id-container"><span class="select2-selection__rendered" id="select2-country_id-container" role="textbox" aria-readonly="true" title="PHILIPPINES"></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                    </div>
                    <div id="provinces" class="form-group" ><label for="province_id">Ciudad </label><select name="province_id" id="province_id" class="form-control select2 select2-hidden-accessible" data-select2-id="province_id" tabindex="-1" aria-hidden="true">
                      <option selected="selected" value="10" data-select2-id="12">Buenos Aires</option>
                    </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="328" style="width: 1140px;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-city_id-container"><span class="select2-selection__rendered" id="select2-city_id-container" role="textbox" aria-readonly="true" title="Bangued"></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span></div>
                    <div class="form-group">
                        <label for="zip">Codigo Postal </label>
                        <input type="text" name="zip" id="zip" placeholder="Codigo Postal" class="form-control" value="">
                    </div>

                </div>
                <!-- /.box-body -->

            </form>
        </div>
        <!-- /.box -->

    </section>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Crear</button>
      </div>
    </div>
  </div>
</div>


<!-- FOOTER: EMPIEZA -->
<?php require_once 'footer.php';  ?>
<!-- FOOTER: TERMINA -->

 </div>  <!-- borrar class vacio linea 48 -->


  </body>
</html>
