<?php
    include("../config/conexion.php"); // incluir la conexion a la bd
    session_start(); // importante incluir para guardar datos del usuario en diferentes sitios web
    // obtener usuario y contra
    $usuario = $_POST['usuario'] ?? '';
    $clave = $_POST['clave'] ?? ''; // asigna una cadena vacia en caso de que o encuentre en el formulario
    // consultar en la BD si existe
    $sql = "SELECT * FROM usuario WHERE username = ? AND clave = ?"; // para evitar inyecciones SQL:
    $consulta = $conexion->prepare($sql); // prepara la consulta
    $consulta->bind_param("ss", $usuario, $clave); // ss indica que son valores string, y luego se pasa los parametros en orden
    $consulta->execute(); // ejecuta la consulta con los valores para preparados 
    $resultado = $consulta->get_result(); // obtiene un resultado
    //verificamos que nos haya devuelto una fila
    if($resultado->num_rows === 1){
        $datos = $resultado->fetch_assoc();
        $_SESSION['usuario'] = $datos['username'];
        $_SESSION['nombre'] = $datos['nombreUsuario'];
        header("Location: ../index.php");
        exit();
    }else{
        ?>
        <script>alert("Usuario o contraseña incorrecto")</script>
        <?php
    }
?>