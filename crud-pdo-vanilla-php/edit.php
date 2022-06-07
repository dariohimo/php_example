<?php

require 'config/conexion.php';

$db = new Database();
$correcto = false;

if(isset($_POST['id'])){



}else{

$nombre = $_POST['nombre'];
$precio = $_POST['precio'];
$id     = $_POST['id'];

echo $id, $nombre, $precio;                    //

$sql = "UPDATE producto SET nombre='$nombre', precio='$precio' WHERE nombre = '$nombre' ";

$respuesta = $db->mysql->prepare($sql);

$respuesta->execute([
    ':nombre' => $nombre,
    ':precio' => $precio,
    ':id' => $id,
]);

if($respuesta){
    $correcto = true;
}

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>editando</title>
</head>
<body class="py-3"> 
    <main class="container">
        <div class="row">
            <div class="col">
                <?php if($correcto){ ?>
                    <h3>Registro Editado</h3>
                    <?php } else {?>
                    <h3>Error al Editar</h3>
                    <?php  } ?>
                    <a class="btn btn-secondary" href="index.php" >Atrás</a>
            </div>
        </div>
    </main>
</body>
</html>