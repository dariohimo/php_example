<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta de clase</title>
</head>
<body>

<?php

include_once './vehiculos.php';
include_once './camiones.php';



$mazda = new Carro(); //instancia el objeto
$renault = new Carro();

$mazda->arrancar();
// muestra navegador  o impresión.
//
$mazda->establecer_color('rojo', 'Mazda');
$renault->establecer_color('amarillo', 'Renault');


//var_dump($mazda); // ver clases


echo 'Camion de clase: ' . '<br>';

$foton = new Camion();
var_dump($foton);



?>

</body>
</html>