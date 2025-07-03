<?php
    $opc = intval($_GET['opc']); // con intval se convierte a entero
    switch($opc){
        case 1:
            break;
        case 2:
            break;
        case 3:
            break;
        case 4:
            break;
        case 5:
            include("../view/login.html");
            break;
        case 6:
            include("../model/cerrarSesion.php");
            break;
        default:
            ?>
            <p>No se ha enviado ninguna opción</p>
            <?php
    }
?>