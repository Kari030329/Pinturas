<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Agregar</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <header>
        <h1>Agregar</h1>
    </header>

    <div class="content-wrapper">
        <!-- Barra lateral izquierda -->
        <div class="sidebar-left">
            <img src="CSS/descargar.png" alt="Imagen izquierda">
            <img src="CSS/descargar.png" alt="Imagen izquierda">
            <img src="CSS/descargar.png" alt="Imagen izquierda">
        </div>

    <div class="container">
        <form action="index.php?action=guardar" method="post">
            <label for="marca">Marca:</label>
            <input type="text" id="marca" name="marca" required><br><br>

            <label for="linea">Linea:</label>
            <input type="text" id="linea" name="linea" required><br><br>

            <label for="color">Color:</label>
            <input type="text" id="color" name="color" required><br><br>

            <label for="precio">Precio:</label>
            <input type="number" id="precio" name="precio" step="0.01" required><br><br>

            <label for="cantidad">Tamaño:</label>
            <input type="text" id="cantidad" name="cantidad" required><br><br>

            <button type="submit">Agregar</button>
            <a href="index.php">Volver</a>

        </form>
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