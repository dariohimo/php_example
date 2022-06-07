<?php

require 'config/conexion.php';

$db = new Database();
$correcto = false;

if(isset($_GET['id'])){



}else{

$nombre = $_GET['nombre'];
$precio = $_GET['precio'];
$id     = $_GET['id'];

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

        <div class="col">

<form class="row g-3" action="edit.php" method="POST" autocomplete="off">


    <div class="colmd-4">
        <label for="nombre" class="form-label">Nombre</label>
        <input type="text" name="nombre" id="nombre" class="form-control" value="<?php echo $id['id']?>" required autofocus>
    </div>
    <div class="colmd-4">
        <label for="precio" class="form-label">Precio</label>
        <input type="text" name="precio" id="precio" class="form-control" required autofocus>
    </div>
    <div class="col-md-12">
        <a class="btn btn-secondary" href="index.php" >Atrás</a>
        <button class="btn btn-warning" type="submit" >Editar</button>
    </div>

</form>

</div>


    </main>
</body>
</html>