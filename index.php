<?php 
include("conectarBaseDeDatos.php"); 
//session_start();
?>

<!DOCTYPE html>				
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    
    <title>CYT Aerol&iacuteneas</title>

    <?php include("librerias-css.php") ?>

</head>
<body class="body-index">
	<div class="container">
		
		<?php include("nav-bar.php") ?>

		<!-- Sección Elegir-Vuelo -->
		<div class="row">
			<div class="col-md-10 col-md-offset-1">
				<div class="panel panel-primary">
						<div class="panel-heading">
				    		<h3 class="panel-title">Vuelos</h3>
				  		</div>	
						
						<div class="panel-body">							
						 	
						 	<!-- Form - Vuelos -->
							<form role="form" action="buscarVuelos.php" method="post">
						  		
								<div class="row">	
							  		<div class="col-md-6">	
							  			
							  			<!-- Radios -->
								  		<div class="form-group">
								  		
								  			<!-- Radio: Ida y Vuelta -->
									  		<label class="radio-inline">
											 	<input type="radio" name="tipoViaje" id="inlineRadio1" value="idaVuelta" checked="checked" onclick="mostrar_campo_fecha_vuelta();"> Ida y Vuelta
											</label>
										
											<!-- Radio: Solo Ida -->	
											<label class="radio-inline">
											  	<input type="radio" name="tipoViaje" id="inlineRadio2" value="ida" onclick="ocultar_campo_fecha_vuelta();"> Solo Ida
											</label>
								  		
								  		</div> <!-- /.form-group -->
							  	
							  		</div> <!-- /.col-md-6 -->
						 		</div> <!-- /.row -->

							  	<div class="row">	
							  		<div class="col-md-6">								  		
								  		
							  			<!-- Origen -->
								  		<label>Origen</label>
								  		<span class="help-block">Elija Provincia y luego Ciudad</span>
								  		
								  		<div class="row">
										 	<div class="col-md-6">
												
												<!-- Provincia -->
										 		<div class="form-group">
											  		<select class="form-control" name="provinciaOrigen" onChange="mostrarCiudadesOrigen(this.value);">
													  	
													  	<option value="" disabled selected>Provincia</option>
														
											 			<?php
														$query = "SELECT * FROM provincias";
														$result = mysqli_query($conexion,$query);
												
														while($row = mysqli_fetch_array($result)) {
														  echo "<option value='".$row['idProvincia']."'>".$row['descripcion']."</option>";
														}
														?>

													</select>
												</div>
										
										 	</div> <!-- /.col-md-6 -->
										
										 	<div class="col-md-6">
										 		
										 		<!-- Ciudad -->
										 		<div class="form-group">
											  		<select class="form-control" name="ciudadOrigen" id="selectCiudadOrigen">
													  	<option value="" disabled selected>Ciudad</option>
														<!-- ACÁ AJAX EJECUTARÍA EL CÓDIGO PHP  -->
													</select>
												</div>
										
									 	  	</div> <!-- /.col-md-6 -->
									 	</div> <!-- /.row -->

								  	</div> <!-- /.col-md-6 -->
								
									<div class="col-md-6">
									
									  	<!-- Destino -->
					  			  		<label>Destino</label>
					  			  		<span class="help-block">Elija Provincia y luego Ciudad</span>
					  			  		
					  			  		<div class="row">
					  					 	<div class="col-md-6">
					  					
					  					 		<div class="form-group">
					  						  		<select class="form-control" name="provinciaDestino" onChange="mostrarCiudadesDestino(this.value);">
					  								  	
					  								  	<option value="" disabled selected>Provincia</option>
					  								  	
					  								  	<?php
														$query = "SELECT * FROM provincias";
														$result = mysqli_query($conexion,$query);
												
														while($row = mysqli_fetch_array($result)) {
														  echo "<option value='".$row['idProvincia']."'>".$row['descripcion']."</option>";
														}
														?>

				 									</select>					  					
					  							</div>
					  					
					  					 	</div> <!-- /.col-md-6 -->
					  					
					  					 	<div class="col-md-6">
					  					
					  					 		<div class="form-group">
					  						  		<select class="form-control" name="ciudadDestino" id="selectCiudadDestino">
					  								  	<option value="" disabled selected>Ciudad</option>
					  								  	<!-- ACÁ AJAX EJECUTARÍA EL CÓDIGO PHP  -->
					  								</select>
					  							</div>
					  					
				  					 	  	</div> <!-- /.col-md-6 -->
				  					 	</div> <!-- /.row -->

			  				  	  	</div> <!-- /.col-md-6 -->
			  				  	</div> <!-- /.row -->

			  				  	<div class="row">	
			  				  		<div class="col-md-6">	

									  	<!-- Categoría -->
									  	<div class="form-group">
									  		<label for="categoria">Categor&iacutea</label>
									  		<select class="form-control" name="categoria" id="categoria">  	
											  	<option value="" disabled selected>Categoría</option>
											  	<option value="economy">Economy</option>
											  	<option value="primera">Primera</option>
											</select>
										</div>

									</div> <!--/.col-md-6 -->

									<div class="col-md-6">

										<!-- Fecha Partida -->
										<div class="row">
										 	
										 	<div class="col-md-6">
										 		<div class="form-group">
													<label for="datepicker">Partida</label>
													<input type="text" class="form-control" id="fechaIda" name="fechaIda" placeholder="aaaa-mm-dd"/>
												</div>
										 	</div><!--/.col-md-6 -->

										 	<!-- Fecha Regreso -->

										 	<div class="col-md-6">
										 		<div class="form-group" id="campo_fecha_vuelta">
													<label for="datepicker">Regreso</label>
													<input type="text" class="form-control" id="fechaVuelta" name="fechaVuelta" placeholder="aaaa-mm-dd"/>
												</div>
										 	</div> <!--/.col-md-6 -->
										 
										 </div> <!--/.row -->

									</div> <!--/.col-md-6 -->
								</div> <!-- /.row -->		
									  	
								<div class="row">	
		  				  			<div class="col-md-12">	
							  			
							  			<!-- Botón "Buscar" -->	
							  	  		<button type="submit" class="btn btn-primary btn-lg center-block">Buscar Vuelo</button>	

							  		</div> <!-- /.col-md-6 -->
								</div> <!-- /.row -->
							
							</form>
						</div> <!-- /.pane-body -->
				</div> <!-- /.panel panel-primary -->
			</div> <!-- /.col-md-10 col-md-offset-1 -->
		</div> <!-- /.row -->
		
		<!-- Slider Destinos-->
		<div class="row">
			<div class="col-md-10 col-md-offset-1">
				<div class="panel panel-primary">
					<div class="panel-heading">
						<h3 class="panel-title">Destinos Destacados</h3>
					</div>
					<!-- /panel-heading -->
					
					<!-- Well -->
					<div class="well-none">
						<!-- Carousel -->
						<div id="myCarousel" class="carousel slide">
							
							<!-- Carousel items -->
							<div class="carousel-inner">
								<div class="item active">
									<div class="row">
										<div class="col-xs-6 col-md-4">
											<div class="thumbnail">
												<div class="caption">
													<img src="imgs/playa.jpg" alt="Image" class="img-responsive">
													<h3>Canc&uacute;n</h3>
													<p>$ 10000</p>
													<a href="#" class="btn btn-primary" role="button">Ver detalle</a>
												</div>
												<!--/caption-->
											</div>
											<!--/thumbnail-->
										</div>
										<!--/col-xs-6 col-md-4--> 
										
										<div class="col-xs-6 col-md-4">
											<div class="thumbnail">
												<div class="caption">
													<img src="imgs/playa.jpg" alt="Image" class="img-responsive">
													<h3>Canc&uacute;n</h3>
													<p>$ 10000</p>
													<a href="#" class="btn btn-primary" role="button">Ver detalle</a>
												</div>
												<!--/caption-->
											</div>
											<!--/thumbnail-->
										</div>
										<!--/col-xs-6 col-md-4--> 
										
										<div class="col-xs-6 col-md-4">
											<div class="thumbnail">
												<div class="caption">
													<img src="imgs/playa.jpg" alt="Image" class="img-responsive">
													<h3>Canc&uacute;n</h3>
													<p>$ 10000</p>
													<a href="#" class="btn btn-primary" role="button">Ver detalle</a>
												</div>
												<!--/caption-->
											</div>
											<!--/thumbnail-->
										</div>
										<!--/col-xs-6 col-md-4--> 
									</div>
									<!--/row-->
								</div>
								<!--/item active-->
								
								<div class="item">
									<div class="row">
										<div class="col-xs-6 col-md-4">
											<div class="thumbnail">
												<div class="caption">
													<img src="imgs/playa.jpg" alt="Image" class="img-responsive">
													<h3>Canc&uacute;n</h3>
													<p>$ 10000</p>
													<a href="#" class="btn btn-primary" role="button">Ver detalle</a>
												</div>
												<!--/caption-->
											</div>
											<!--/thumbnail-->
										</div>
										<!--/col-xs-6 col-md-4--> 
										
										<div class="col-xs-6 col-md-4">
											<div class="thumbnail">
												<div class="caption">
													<img src="imgs/playa.jpg" alt="Image" class="img-responsive">
													<h3>Canc&uacute;n</h3>
													<p>$ 10000</p>
													<a href="#" class="btn btn-primary" role="button">Ver detalle</a>
												</div>
												<!--/caption-->
											</div>
											<!--/thumbnail-->
										</div>
										<!--/col-xs-6 col-md-4--> 
										
										<div class="col-xs-6 col-md-4">
											<div class="thumbnail">
												<div class="caption">
													<img src="imgs/playa.jpg" alt="Image" class="img-responsive">
													<h3>Canc&uacute;n</h3>
													<p>$ 10000</p>
													<a href="#" class="btn btn-primary" role="button">Ver detalle</a>
												</div>
												<!--/caption-->
											</div>
											<!--/thumbnail-->
										</div>
										<!--/col-sm-3 col-xs-6--> 
									</div>
									<!--/row-->
								</div>
								<!--/item-->
								<div class="item">
									<div class="row">
										<div class="col-xs-6 col-md-4">
											<div class="thumbnail">
												<div class="caption">
													<img src="imgs/playa.jpg" alt="Image" class="img-responsive">
													<h3>Canc&uacute;n</h3>
													<p>$ 10000</p>
													<a href="#" class="btn btn-primary" role="button">Ver detalle</a>
												</div>
												<!--/caption-->
											</div>
											<!--/thumbnail-->
										</div>
										<!--/col-xs-6 col-md-4-->
										
										<div class="col-xs-6 col-md-4">
											<div class="thumbnail">
												<div class="caption">
													<img src="imgs/playa.jpg" alt="Image" class="img-responsive">
													<h3>Canc&uacute;n</h3>
													<p>$ 10000</p>
													<a href="#" class="btn btn-primary" role="button">Ver detalle</a>
												</div>
												<!--/caption-->
											</div>
											<!--/thumbnail-->
										</div>
										<!--/col-xs-6 col-md-4-->

										<div class="col-xs-6 col-md-4">
											<div class="thumbnail">
												<div class="caption">
													<img src="imgs/playa.jpg" alt="Image" class="img-responsive">
													<h3>Canc&uacute;n</h3>
													<p>$ 10000</p>
													<a href="#" class="btn btn-primary" role="button">Ver detalle</a>
												</div>
												<!--/caption-->
											</div>
											<!--/thumbnail-->
										</div>
										<!--/col-xs-6 col-md-4--> 
									</div>
									<!--/row-->
								</div>
								<!--/item-->
							</div>
							<!--/carousel-inner--> 

							<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
								<span class="glyphicon glyphicon-chevron-left"></span>
							</a>
							<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
								<span class="glyphicon glyphicon-chevron-right"></span>
							</a>
						</div>
						<!--/myCarousel-->
					</div>
					<!--/well-->
				</div>
			</div>
			<!-- /.col-md-12 -->
		</div>
		<!-- /.row -->
	
		<?php include("footer.php") ?>

	</div> <!-- /.container -->

	<?php include("librerias-js.php"); ?>

</body>
</html>


