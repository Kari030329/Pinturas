<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>PINTURAS</title>
    <link rel="stylesheet" href="CSS/styles.css">
</head>
<body>
    <header>
        <h1>Pinturas</h1>
    </header>

    <nav><a href="index.php?action=agregar">Agregar</a></nav>

    <div class="content-wrapper">
        <!-- Barra lateral izquierda -->
        <div class="sidebar-left">
            <img src="CSS/descargar.png" alt="Imagen izquierda">
            <img src="CSS/descargar.png" alt="Imagen izquierda">
            <img src="CSS/descargar.png" alt="Imagen izquierda">
        </div>

        <!-- Contenido principal -->
        <div class="container">
            <h2>Pinturas Disponibles</h2>

            <?php if (!empty($rowset)): ?>
                <?php foreach ($rowset as $row): ?>
                <div class="videojuego">
                    <h3><?php echo $row->Marca; ?></h3>
                    <p><strong>Linea:</strong> <?php echo $row->linea; ?></p>
                    <p><strong>Color:</strong> <?php echo $row->Color; ?></p>
                    <p><strong>Precio:</strong> $<?php echo $row->Precio; ?></p>
                    <p><strong>Tamaño:</strong> <?php echo $row->$cantidad; ?></p>
                    <a href="index.php?action=editarPrecio&id=<?php echo $row->id; ?>">Editar</a>
                    <a href="index.php?action=eliminar&id=<?php echo $row->id; ?>">Eliminar</a>
                </div>
                <?php endforeach; ?>
            <?php else: ?>
                <p>No hay pinturas disponibles.</p>
                <a href="index.php?action=agregar">Agregar</a>
                <a href="index.php">Volver</a>
            <?php endif; ?>
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
        <div class="footer-text">Plastimex Plastimex Plastimex Plastimex Plastimex Plastimex Plastimex Plastimex Plastimex Plastimex Plastimex Plastimex Plastimex Plastimex Plastimex Plastimex </div>
    </div>

</body>
</html>
