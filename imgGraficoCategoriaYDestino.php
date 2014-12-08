<?php
	include('conectarBaseDeDatos.php');

	$idCiudad=$_REQUEST["idCiudad"];

	// CANT DE PASAJES VENDIDOS CON ID AVION 1
	$query = "SELECT * FROM reservas R INNER JOIN 
	vuelos V ON R.cod_vuelo = V.idvuelo INNER JOIN
	programacionvuelos PV ON V.cod_programacion_vuelo = PV.idProgramacionVuelo
	WHERE R.categoria = 2
	AND PV.cod_aeropuerto_destino = $idCiudad;";
	
	$result = mysqli_query($conexion,$query);
	// mysqli_num_rows() retorna el número de filas que devuelve la consulta
	$cantPasajesVendidosEconomy = mysqli_num_rows($result); 

	// CANT DE PASAJES VENDIDOS CON ID AVION 1
	$query = "SELECT * FROM reservas R INNER JOIN 
	vuelos V ON R.cod_vuelo = V.idvuelo INNER JOIN
	programacionvuelos PV ON V.cod_programacion_vuelo = PV.idProgramacionVuelo
	WHERE R.categoria = 1
	AND PV.cod_aeropuerto_destino = $idCiudad;";
	
	$result = mysqli_query($conexion,$query);
	// mysqli_num_rows() retorna el número de filas que devuelve la consulta
	$cantPasajesVendidosPrimera = mysqli_num_rows($result); 

	echo "</br> Cantidad Pasajes Vendidos Economy: $cantPasajesVendidosEconomy";
	echo "</br> Cantidad Pasajes Vendidos Primera: $cantPasajesVendidosPrimera";
	echo "</br>";

	if($cantPasajesVendidosEconomy == 0 and $cantPasajesVendidosPrimera == 0) {
		echo "No existe pasajes vendidos con este destino.";
		die();
	} else {
		echo "<img src='graficoCategoriaYDestino.php?idCiudad=".$idCiudad."&cantPasajesVendidosEconomy=".$cantPasajesVendidosEconomy."&cantPasajesVendidosPrimera=".$cantPasajesVendidosPrimera."'/>";
	}
?>
