<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$precio1 = 30;  
$cantidad1 = 2;

$precio2 = 45; 
$cantidad2 = 1;

$precio3 = 60; 
$cantidad3 = 3;

$subtotal = ($precio1 * $cantidad1) + ($precio2 * $cantidad2) + ($precio3 * $cantidad3);

$impuestos = $subtotal * 0.18;  
$descuento = $subtotal * 0.05;
$total = $subtotal + $impuestos - $descuento;

echo "Subtotal: S/ " . $subtotal . "\n";
echo "IGV: S/ " . $impuestos . "\n";
echo "Descuento: S/ " . $descuento . "\n";
echo "Total: S/ " . $total . "\n";

if ($total > 300) {
    echo "Compra grande";
} else {
    echo "Compra pequeña";
}
?>
</body>
</html>