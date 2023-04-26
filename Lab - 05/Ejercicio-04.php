<?php
    $precio = $_POST["precio"];
    $cantidad = $_POST["cantidad"];

    $importe_compra = $precio * $cantidad;
    $descuento1 = $importe_compra * 0.05;
    $importe_compra_descuento1 = $importe_compra - $descuento1;
    $descuento2 = $importe_compra_descuento1 * 0.05;
    $descuento_total = $descuento1 + $descuento2;
    $importe_pagar = $importe_compra - $descuento_total;
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
    <?php
        echo "<h1>Resultados:</h1>";
		echo "<p>Importe de la Compra: S/." . $importe_compra . "</p>";
		echo "<p>Importe del Descuento Total: S/." . $descuento_total . "</p>";
		echo "<p>Importe a Pagar: S/." . $importe_pagar . "</p>";
    ?>
    
</body>
</html>