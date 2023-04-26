<?php
	$ventas = $_POST["ventas"];
	$hijos = $_POST["hijos"];
	
	$bonificacion = $hijos * 50;
	$comision = $ventas * 0.075;
	$sueldo_bruto = 600 + $comision + $bonificacion;
	$descuento = $sueldo_bruto * 0.11;
	$sueldo_neto = $sueldo_bruto - $descuento;
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

    <h1>Resultados:</h1>

    <?php
        
		echo "<p>Bonificación por Hijos en Edad Escolar: S/." . $bonificacion . "</p>";
		echo "<p>Comisión por Ventas: S/." . $comision . "</p>";
		echo "<p>Sueldo Bruto: S/." . $sueldo_bruto . "</p>";
		echo "<p>Descuento: S/." . $descuento . "</p>";
		echo "<p>Sueldo Neto: S/." . $sueldo_neto . "</p>";
    ?>
</body>
</html>