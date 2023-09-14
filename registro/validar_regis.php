<?php

// Verifica si el formulario ha sido enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // Validaciones
    $nombre = validar_input($_POST["inom"]);
    $apellido = validar_input($_POST["inape"]);
    $cedula = validar_input($_POST["inced"]);
    $edad = validar_input($_POST["ined"]);
    $fechaRegistro = validar_input($_POST["infech"]);

    // Puedes agregar tus propias validaciones aquí, por ejemplo:
    if (empty($nombre) || empty($apellido) || empty($cedula) || empty($edad) || empty($fechaRegistro)) {
        // Mensaje SweetAlert para campos obligatorios
       echo("
       <script>
            alert('Campos vacios');
            window.location.href = '../info.php';
       </script>");
        
    } else {
        // Si todas las validaciones pasan, puedes proceder a guardar los datos en la base de datos
        // Aquí debes agregar tu código de conexión a la base de datos y la consulta para insertar los datos
        include("../conexion.php");
        
        // Por ejemplo:
        // $conexion = new mysqli("host", "usuario", "contraseña", "nombre_de_la_base_de_datos");
        $sql = "INSERT INTO usuario (nombre_usu, apellido_usu, fecha_regis_usu, edad, ced) 
        VALUES ('$nombre', '$apellido', '$fechaRegistro', '$edad', '$cedula')";
        
        if ($conexion->query($sql) === TRUE) {
            // Mensaje SweetAlert para éxito
            echo("
            <script>
                 alert('Campos insertados');
                 window.location.href = '../info.php';
            </script>");
        } else {
            // Mensaje SweetAlert para error en la base de datos
            echo("
            <script>
                 alert('Error al registrar datos');
                 window.location.href = '../info.php';
            </script>");
        }
    }

} else {
    // Mensaje SweetAlert para acceso no autorizado
    echo("
    <script>
         alert('Error permiso');
         window.location.href = '../info.php';
    </script>");
}

// Función para limpiar y validar los inputs
function validar_input($datos) {
    $datos = trim($datos);
    $datos = stripslashes($datos);
    $datos = htmlspecialchars($datos);
    return $datos;
}

?>
