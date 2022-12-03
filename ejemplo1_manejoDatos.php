<?php

	require "ejemplo1_db.php";



	function getListaCiudades() {
		// Nos conectamos a la base de datos world
		$DB = crearConexion("world");
		// Definimos la consulta para obtener todos los datos de la tabla city.
		$sql = "SELECT ID, Name, CountryCode, District, Population FROM city ORDER BY Population ASC"; //  ORDER BY Population DESC
		// Hacemos la consulta y guardamos el resultado en $result
		$result = mysqli_query($DB, $sql);

		// Si la consulta ha devuelto algún valor, devolvemos los valores.
		if (mysqli_num_rows($result) > 0) {
			return $result;
		// Si no, enviamos un mensaje de error.
		} else {
			echo "No hay nada en la lista de ciudades.";
		}
		// Cerramos la conexion
		cerrarConexion($DB);
	}
?>

