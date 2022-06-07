<?php

echo 'bd estado en conexion';
echo '<br>';

echo '<br>';
echo '<br>';
    require './config/conexion.php';

    $db = new Database();
   
    $sentencia = $db->mysql->query("select * FROM productos");
    $sentencia->execute();
    $resultado = $sentencia->fetchAll(PDO::FETCH_ASSOC);


   echo '<pre>';

	print_r($resultado);   


?>

<main class="container">

  <div class="row">

       <div class="col">
     
          <h1> Productos </h1>
        <a href="nuevo.php" > Nuevo Producto </a>

   </div>
</div>


<table>

  <thead>
   <tr>
     <th>ID</th>
     <th>Nombre</th>
     <th>Precio</th>
     <th>Editar</th>
     <th>Eliminar</th>
   </tr>
 
  </thead>
   
<tbody>
<?php foreach($resultado AS $fila) { ?>

    <tr>

      <td>?php echo $fila['id'] ?> </td>
   
      <td> ?php echo $fila['id'] ?>   </td>
      <td>  ?php echo $fila['nombre'] ?> </td>
      <td> ?php echo $fila['precio'] ?></td>
      <td>  </td>
      <td></td>
   

</tr>
<?php } ? >

</tbody>

</body>
</html>

