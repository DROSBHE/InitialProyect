<!doctype html>

<html lang="en">
  <head>
    <title>Productos</title>
    
	<!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="css/styles.css">
	<link rel="icon" type="image/x-icon" href="images/BB_login.jpeg">
    <header class ="header">
        <h1>Agregar productos</h1>
    </header>
  </head>
  <form action="conRegistro.php" method="post">
            <input type="number"  name="codigo" id="codigo" placeholder="Ingrese Codigo">
            <input type="text"  name="descripcion" id="descripcion" placeholder="Ingrese una breve descripcion">
            <input type="number" min="1"  name="cantidad" id="cantidad" placeholder="Ingrese la cantidad">
            <select name="estado" id="estado">
              <option>Disponible</option>
              <option>En revision</option>
              <option>Agotado</option>
            </select>
            <input type="text" name="responsable" id="responsable" placeholder="Nombre del responsable">
            
            <input type="submit" class="botons" value="Guardar" name="btnguardar">
            <a href="menu.php" class="botons">Regresar</a>
  <body>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
 
	</body>
</html>