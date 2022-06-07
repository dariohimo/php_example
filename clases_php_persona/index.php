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

include_once './persona.php';
include_once './cuenta.php';




$Maria = new Persona(); //instancia el objeto
$Carlos = new Persona();
$Julio = new Persona();
$Beti = new Persona();
$Francisco = new Persona();
$Ana = new Persona();

$Maria->mayorEdad(15);
$Carlos->mayorEdad(20);
$Beti->mayorEdad(50);

$Maria->nombreCompleto('Maria', 'Gonzalez');
$Maria->pesoIdeal(1.50, 80);


$Julio->nombreCompleto('Julio', 'Perez');
$Julio->pesoIdeal(1.8, 70);

$Beti->nombreCompleto('Beti', 'Perigri');
$Beti->pesoIdeal(1.6, 65);

$Francisco->nombreCompleto('Francisco', 'Mota');
$Francisco->pesoIdeal(1.7, 195);

$Ana->nombreCompleto('Ana', 'Mota');
$Ana->pesoIdeal(1.57, 63);


/*
$Francisco = new Cuenta();
$Francisco-> mostrar('Francisco', 'cantidad');
*/

/*
$mazda->establecer_color('rojo', 'Mazda');
$renault->establecer_color('amarillo', 'Renault');

//var_dump($mazda); // ver clases


echo 'Camion de clase: ' . '<br>';

$foton = new Camion();
var_dump($foton);

*/

?>

</body>
</html>