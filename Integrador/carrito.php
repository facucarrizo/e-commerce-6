<?php
session_start();

?>
<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="css/style.css">
	<script src="https://kit.fontawesome.com/67f61afa3e.js" crossorigin="anonymous"></script>
	<title>Mi Carrito
	</title>
	<link rel="stylesheet" href="css/style.css" />
	<link rel="stylesheet" href="css/myaccount.css" />
	<!-- <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"> -->
</head>

<body>
	<a href="Contacto.html" id="aa"> Contactanos</a>
	<!-- Header -->

	<?php require_once "NAV.php" ?>

	<!--!ACA EMPIEZA CARRITO.//-->
	<section class="section-pagetop bg">
		<div class="">
			<h2 class="title-page">Mi Carrito</h2>
		</div>

		<!-- container //  -->
	</section>

	<div class="mx-5">
		<section class="section-content padding-y">
			<div class="">
				<div class="row">

					<!-- col.// -->
					<main class="col-md-9">
						<div class="tab-content"></div>

						<div class="tab-pane" id="guardados" role="tabpanel">
							<article class="card mb-3">
								<div class="card-body">
									<div class="card">
										<table class="table table-borderless table-shopping-cart ">
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
															<div class="aside"><img src="img/images2.jfif" class="img-sm "></div>
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
											<a href="#" class="btn btn-primary float-md-right"> Comprar <i class="fa fa-chevron-right"></i> </a>
											<a href="index.html" class="btn btn-light"> <i class="fa fa-chevron-left"></i> Seguir comprando </a>
										</div>
									</div> <!-- card.// -->
									<div class="alert alert-success mt-3">
										<p class="icontext"><i class="icon text-success fa fa-truck"></i> Envios gratis entre 1-2 semanas</p>
									</div>
								</div>
							</article>

						</div>



						<!-- card.// -->
					</main>
					<aside class="col-md-3">
						<div class="card mb-3">
							<div class="card-body">
								<form>
									<div class="form-group">
										<label>Tenes un Codigo de Descuento?</label>
										<div class="input-group">
											<input type="text" class="form-control" name="" placeholder="Codigo">
											<span class="input-group-append">
												<button class="btn btn-primary">Enviar</button>
											</span>
										</div>
									</div>
								</form>
							</div> <!-- card-body.// -->
						</div> <!-- card .// -->
						<div class="card">
							<div class="card-body">
								<dl class="dlist-align">
									<dt>Precio Total:</dt>
									<dd class="text-right">$ 568</dd>
								</dl>
								<dl class="dlist-align">
									<dt>Descuento:</dt>
									<dd class="text-right">$ 658</dd>
								</dl>
								<dl class="dlist-align">
									<dt>Total:</dt>
									<dd class="text-right  h5"><strong>$1,650</strong></dd>
								</dl>
								<hr>
								<p class="text-center mb-3">
									<img src="img/payments.png" height="26">
								</p>

							</div> <!-- card-body.// -->
						</div> <!-- card .// -->

				</div>
				</aside>
				<!-- col.// -->
			</div>

			<!-- container .//  -->
		</section>

		<!--!ACA TERMINA MI CARRITO.//-->

		<br /><br /><br />

	</div> <!-- aca cierra mx-5 -->




	<!-- FOOTER: EMPIEZA -->
	<?php require_once 'footer.php';  ?>
	<!-- FOOTER: TERMINA -->



	</div>
	</div>

</body>

</html>