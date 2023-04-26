<?php
		$tarifa = $_POST["tarifa"];
		$dias = $_POST["dias"];

		$importe_bruto = $tarifa * $dias;
		$descuento = $importe_bruto * 0.15;
		$importe_neto = $importe_bruto - $descuento;
		$lapiceros = $dias * 3;
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
        echo "<p>Importe Bruto: S/." . $importe_bruto . "</p>";
        echo "<p>Importe del Descuento: S/." . $descuento . "</p>";
        echo "<p>Importe Neto a Pagar: S/." . $importe_neto . "</p>";
        echo "<p>Lapiceros de Obsequio: " . $lapiceros . "</p>";
    ?>

</body>
</html>