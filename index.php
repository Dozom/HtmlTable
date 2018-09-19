<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Ajedrez by dani</title>
</head>
<body>
<?php 
	// este es el contador de las filas, cada fila contiene x columnas
	$i = 0;
	// este es el contador de las columnas, varias columnas pueden pertenecer a una fila, por ejemplo.
	$j = 0;
	/*
		00	01	02	03	04	05	06	07
		10	11	12	13	14	15	16	17
		20	21	22	23	24	25	26	27
		30	31	32	33	34	35	36	37
		40	41	42	43	44	45	46	47
		50	51	52	53	54	55	56	57
		60	61	62	63	64	65	66	67
		70	71	72	73	74	75	76	77
	Para desglosarlo, el primer numero es el numero de la fila y el segundo es el de la columna.
	00 = fila 0 columna 0
	01 = fila 0 columna 1
	10 = fila 1 columna 0
	Asi a groso modo es eso 
	*/
	// Aqui creo la etiqueta table
	echo "<table>";
	/* empiezo el bucle que hace filas y como cada fila contiene x columnas, que en ajedrez son 8, por logica las columnas van dentro de las filas
	*/
	while ($i < 8) { //bucle de filas
		echo "<tr>";
		while ($j < 8) { // bucle de columnas
		// insertas columna dentro de fila es decir que queda algo asi tr>td*8 = dentro de una fila 8 columnas
			echo "<td>".$i.$j."</td>";
			// sumamos 1 a la variable, se puede hacer con el operador de incremento, pero asi queda más claro.
			$j = $j + 1;
		}
		/* reiniciamos las columnas, porque a la segunda pasada j seria 8 y ya no entraria en el bucle. porque 8 no es menor a 8, sino igual.*/
		$j = 0;
		// sumamos 1 a la variable, se puede hacer con el operador de incremento, pero asi queda más claro.
		$i = $i + 1;
		// cerramos fila
		echo "</tr>";
	}
	// cerramos tabla
	echo "</table>"
 ?>	
</body>
</html>