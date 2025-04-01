<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Editar</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <header>
        <h1>Editar</h1>
    </header>

    <div class="content-wrapper">
        <!-- Barra lateral izquierda -->
        <div class="sidebar-left">
            <img src="CSS/descargar.png" alt="Imagen izquierda">
            <img src="CSS/descargar.png" alt="Imagen izquierda">
            <img src="CSS/descargar.png" alt="Imagen izquierda">
        </div>

    <div class="container">
        <div class="container2">

        <form action="index.php?action=actualizarPrecio&id=<?php echo $id; ?>" method="post">
            
            <label for="marca">Marca:</label><br>
            <input type="text" id="marca" name="marca" required><br><br>

            <label for="linea">Linea:</label><br>
            <input type="text" id="linea" name="linea" required><br><br>

            <label for="color">Color:</label><br>
            <input type="text" id="color" name="color" required><br><br>
            
            <label for="precio">Precio:</label><br>
            <input type="number" id="precio" name="precio" step="0.01" value="<?php echo $row->precio; ?>" required><br><br>

            <label for="cantidad">Tamaño:</label><br>
            <input type="text" id="cantidad" name="cantidad" required><br><br>

            <button type="submit">Actualizar</button>
            <a href="index.php">Volver</a>
        </form>
        </div>
 
    </div>

     <!-- Barra lateral derecha -->
  <div class="sidebar-right">
            <img src="CSS/descargar.png" alt="Imagen derecha">
            <img src="CSS/descargar.png" alt="Imagen derecha">
            <img src="CSS/descargar.png" alt="Imagen derecha">
        </div>
    </div>
     <!-- Pie de página -->
   <div class="footer">
        <div class="footer-text">Plastimex Plastimex Plastimex Plastimex Plastimex Plastimex Plastimex Plastimex Plastimex Plastimex Plastimex Plastimex Plastimex Plastimex Plastimex Plastimex Plastimex </div>
    </div>
</body>
</html>