<?php
		$precio = $_POST["precio"];
		$cantidad = $_POST["cantidad"];

		$nuevo_precio = $precio - ($precio * 0.05);
		$importe = $cantidad * $nuevo_precio;
		$descuento = $importe * 0.07;
		$importe_a_pagar = $importe - $descuento;
		$obsequio = $cantidad * 2;
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css.css">
    <title>Resultado</title>
</head>
<body>
    <h1>Resultado:</h1>
	
    <?php
		echo "<p>Nuevo Precio de la Gaseosa: S/." . $nuevo_precio . "</p>";
		echo "<p>Importe de la Compra: S/." . $importe . "</p>";
		echo "<p>Importe del Descuento: S/." . $descuento . "</p>";
		echo "<p>Importe a Pagar: S/." . $importe_a_pagar . "</p>";
		echo "<p>Obsequio: " . $obsequio . " caramelos</p>";
    ?>

</body>
</html>