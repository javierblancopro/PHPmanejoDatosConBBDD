<?php 

	include "ejemplo1_manejoDatos.php";

	function pintaListaCiudades() {
		$datos = getListaCiudades();
		// Si hemos recibido un menasje de error lo mostramos.
		if (is_string($datos)) {
			echo $datos;

		// Si hemos recibido datos
		} else {
			// Construimos la tabla
			echo "<table>\n 
					<tr>\n
						<th>Id</th>\n
						<th>Nombre</th>\n
						<th>Código País</th>\n
						<th>Comunidad</th>\n
						<th>Población</th>\n
					</tr>\n";

			
			// Obtenemos cada una de las filas de datos que nos devolvió la consulta.
			// mysqli_fetch_assoc avanza entre cada uno de los elementos del array que contiene cada vez que se llama, hasta que no haya más, por eso se puede usar en un while.
			while ($fila = mysqli_fetch_assoc($datos)) {
				echo "<tr>\n
						<td>" . $fila["ID"] . "</td>\n
						<td>" . $fila["Name"] . "</td>\n
						<td>" . $fila["CountryCode"] . "</td>\n
						<td>" . $fila["District"] . "</td>\n
						<td>" . $fila["Population"] . "</td>\n
					</tr>";
			};
			

			/*
			foreach ($datos as $fila) {
				echo "<tr>\n
						<td>" . $fila["ID"] . "</td>\n
						<td>" . $fila["Name"] . "</td>\n
						<td>" . $fila["CountryCode"] . "</td>\n
						<td>" . $fila["District"] . "</td>\n
						<td>" . $fila["Population"] . "</td>\n
					</tr>";
			};
			*/
			echo "</table>";
		};
	}
?>