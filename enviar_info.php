<?php
// Configuración de la conexión a la base de datos (ajústala según tu configuración)
include("conexion.php");

// Obtener el día seleccionado desde la solicitud GET
$selectedDay = $_GET['day'];

// Consulta SQL para obtener información basada en el día seleccionado
$sql = "SELECT nombre_usu, apellido_usu, fecha_regis_usu, edad, ced FROM usuario WHERE DAY(fecha_regis_usu) = $selectedDay";

// Reemplaza 'tu_tabla' con el nombre real de tu tabla

$result = $conexion->query($sql);

if ($result->num_rows > 0) {
    // Si se encontraron resultados, construir un array con los datos
    $data = array();

    while ($row = $result->fetch_assoc()) {
        $data[] = $row;
    }

    // Devolver los datos en formato JSON
    header('Content-Type: application/json');
    echo json_encode($data);
} else {
    // Si no se encontraron resultados, puedes devolver un JSON vacío o un mensaje de error
    echo json_encode(array('error' => 'No se encontraron datos para el día seleccionado.'));
}

// Cerrar la conexión a la base de datos
$conexion->close();
?>
