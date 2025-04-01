<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Eliminar</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <header>
        <h1>Eliminar</h1>
    </header>

    <div class="content-wrapper">
        <!-- Barra lateral izquierda -->
        <div class="sidebar-left">
            <img src="CSS/descargar.png" alt="Imagen izquierda">
            
        </div>

    <div class="container">
        <?php if (isset($row)): ?> <!-- Verifica si $row está definido -->
            <p>¿desea eliminar? "<?php echo $row->Modelo; ?>"?</p>
            <a href="index.php?action=eliminar&id=<?php echo $id; ?>&confirmar=1">Eliminar</a>
            <a href="index.php">Cancelar</a>
        <?php else: ?>
            <p>eliminado.</p>
            
        <?php endif; ?>
    </div>
      <!-- Barra lateral derecha -->
      <div class="sidebar-right">
            <img src="CSS/descargar.png" alt="Imagen derecha">
            
        </div>
    </div>

     <!-- Pie de página -->
   <div class="footer">
        <div class="footer-text">Plastimex Plastimex Plastimex Plastimex Plastimex Plastimex Plastimex Plastimex Plastimex Plastimex Plastimex Plastimex Plastimex Plastimex Plastimex Plastimex Plastimex </div>
    </div>
</body>
</html>