<?php
    session_start();
    $nombre = $_SESSION['nombre'] ?? null;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Power Rent a Car</title>
    <link rel="stylesheet" href="public/css/estiloGeneral.css">
</head>
<body>
    <header class="headerContenedor">
        <nav class="navegar">
            <img class="logo" src="public/img/logo_sin_fondo.png">
            <ul class="contenedorLista">
                <li><a href="controller/opciones.php?opc=1">Inicio</a></li>
                <li><a href="controller/opciones.php?opc=2">¿Dónde nos encontramos?</a></li>
                <li><a href="controller/opciones.php?opc=3">Vehículos</a></li>
                <li><a href="controller/opciones.php?opc=4">Contacto</a></li>
                <?php if($nombre): ?>
                    <li><a href="controller/opciones.php?opc=6">Cerrar sesión</a></li>
                    <li><strong><?= htmlspecialchars($nombre)?></strong></li>
                <?php else: ?>
                    <li><a href="controller/opciones.php?opc=5">Iniciar sesión</a></li>
                <?php endif; ?>
            </ul>
        </nav>
    </header>
</body>
</html>


