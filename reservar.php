<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CYT Aerol&iacuteneas - Reservar</title>

     <!-- CSS propio -->  
    <link rel="stylesheet" type="text/css" href="css/estilo.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">
    <!-- jQuery UI CSS -->
    <link rel="stylesheet" href="jquery/jquery-ui/jquery-ui.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    
    </head>
    <body>
    <div class="container">
		<div class="row">
				<div class="col-md-10 col-md-offset-1">

					<nav class="navbar navbar-default fixed-top" role="navigation">
					  	<div class="container-fluid">
						    <!-- Brand and toggle get grouped for better mobile display -->
						    <div class="navbar-header">
						      	<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						        	<span class="sr-only">Toggle navigation</span>
							        <span class="icon-bar"></span>
							        <span class="icon-bar"></span>
							        <span class="icon-bar"></span>
						     	</button>
						      	<a class="navbar-brand" href="index.html">
									<img src="imgs/logo.png" width="40px" height="40px" />
								</a>
						    </div>

					    <!-- Collect the nav links, forms, and other content for toggling -->
					    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						    <ul class="nav nav-pills">
					      	 	<li><a href="index.php">Inicio</a></li>
						        <li class="active"><a href="miReserva.php">Resevas</a></li>
						        <li><a href="vuelos.php">Vuelos</a></li>
						        <li><a href="contacto.php">Contacto</a></li>
						    </ul>
					        <ul class="nav navbar-nav navbar-right">
				            	<a href="#"><li><span class="glyphicon glyphicon-user"></span> Administrador</a></li>  
				            </ul>
					    </div><!-- /.navbar-collapse -->
					</div><!-- /.container-fluid -->
				</nav><!-- /.navbar navbar-default fixed-top -->
			</div><!-- /.col-md-10 col-md-offset-1 -->
		</div><!-- /.row -->
		
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                
                <h3>Vuelo elegido</h3>
                <!-- Tabla -->
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Origen</th>
                            <th>Destino</th>
                            <th>Precio</th>
                            <th>Partida</th>
                            <th>Regreso</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Buenos Aires</td>
                            <td>Santa Fe</td>
                            <td>$1.500</td>
                            <td>11/11/2014</td>
                            <td>15/11/2014</td>
                        </tr>
                    </tbody>   
                </table>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                
                <!-- Formulario -->
                <form action="#" method="post" onsubmit="return validar_form_reservar()" role="form" >
                    
                    <h4>Complete el formulario para reservarlo</h4>
                    
                    <!-- Campo Nombre -->
                    <div class="form-group">
                        <label for="nombre">Nombre</label>
                        <input type="text" class="form-control" placeholder="Nombre" id="nombre">
                        <span class="text-danger error_form_reservar" id="error_nombreyapellido">No puedes dejar este campo en blanco.</span>
                    </div>

                    <!-- Campo Apellido -->
                    <div class="form-group">
                        <label for="nombre">Apellido</label>
                        <input type="text" class="form-control" placeholder="Apellido" id="apellido">
                        <span class="text-danger error_form_reservar" id="error_apellido">No puedes dejar este campo en blanco.</span>
                    </div>

                    <!-- Campo Email -->                    
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" placeholder="Email" id="email">
                        <span class="text-danger error_form_reservar" id="error_email">No puedes dejar este campo en blanco o con un formato de Email incorrecto.</span>   
                    </div>
                    
                    <!-- Campo DNI -->                    
                    <div class="form-group">
                        <label for="dni">DNI</label>
                        <input type="text" class="form-control" placeholder="DNI" id="dni">
                        <span class="text-danger error_form_reservar" id="error_dni">No puedes dejar este campo en blanco o con un formato de DNI incorrecto.</span> 
                    </div>

                    <!-- Campo Fecha Nacimiento -->                    
                    <div class="form-group">
                        <label for="fecha_nac">Fecha de Nacimiento</label>
                        <input type="text" class="form-control" placeholder="Fecha de Nacimiento" id="fecha_nac">
                        <span class="text-danger error_form_reservar">No puedes dejar este campo en blanco.</span>
                    </div>
                    
                    <!-- Submit Reservar-->
                    <div class="form-group">
                        <input type="submit" class="btn btn-primary" value="Reservar">
                    </div>
                </form>
            </div>
        </div>        
    </div>
    
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <!-- jQueryUI -->
    <script type="text/javascript" src="jquery/jquery-ui/jquery-ui.js"></script>
    <!-- Script para DatePicker -->
    <script type="text/javascript" src="jquery/script-datepicker.js"></script>
    <!-- Scripts -->
    <script type="text/javascript" src="javascript/scripts.js"></script>
   
    </body>
</html>
