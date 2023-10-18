<?php

include("conn.php");

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Usuarios</title>
    <link rel="stylesheet" href="css/registrados.css">




    
</head>
<body>
    


<div class="fondo-box">
        <div class= "centrar">
<p>LISTA DE USUARIOS REGISTRADOS</p>
<!------tabla en donde se muestra los datos de la base de datos seleccionada con los campos------>
<table class="tabla">
<thead>
<tr>

<th scope="col">codigo del producto</th>
<th scope="col">descripcion</th>
<th scope="col">cantidad</th>
<th scope="col">estado</th>

</tr>
</thead>
<tbody>
  

<!---consulta dos datos de la base de datos y hace el conteo de los usuarios---->
<?php 
$busqueda=mysqli_query($conn,"SELECT * FROM almacen "); 
            $numero = mysqli_num_rows($busqueda); ?>
            <h5 class="card-tittle">Resultados (<?php echo $numero; ?>)</h5>
            <div class="container_card">
                <?php 
                $num = '0';
                while ($resultado = mysqli_fetch_assoc($busqueda)){
                  $num++;
                  ?>



    <!----campos que contiene la tabla de la base de datos------>
<tr>
<th scope="row"><?php echo $num; ?></th>
<td><?php echo $resultado["codigo_producto"]; ?></td>
<td><?php echo $resultado["descripcion_producto"]; ?></td>
<td><?php echo $resultado["cantidad_producto"]; ?></td>
<td><?php echo $resultado["estado_producto"]; ?></td>

</tr>    

                <?php } ?>    


</tbody>
</table>

         </div>


         </body>
         </html>