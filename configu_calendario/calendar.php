<?php
function draw_calendar($month, $year){
    // Obtener el primer día del mes
    $first_day = mktime(0,0,0,$month, 1, $year);
    $days_in_month = cal_days_in_month(CAL_GREGORIAN, $month, $year);
    $day_of_week = date('w', $first_day);

    // Crear una tabla
    echo "<table class='calendario-table'>";

    // Encabezados de la tabla (días de la semana)
    echo "<tr><th>Domingo</th><th>Lunes</th><th>Martes</th><th>Miércoles</th><th>Jueves</th><th>Viernes</th><th>Sábado</th></tr>";

    // Inicializar el contador de día
    $day_counter = 0;

    // Inicializar el primer día de la siguiente fila después del primer día del mes
    $next_day = 1;

    // Bucle para llenar la tabla
    for($i = 0; $i < 6; $i++){
        echo "<tr>";

        for($j = 0; $j < 7; $j++){
            if($day_counter >= $day_of_week && $day_counter < $days_in_month + $day_of_week){
                // Día en el mes
                $day = $day_counter - $day_of_week + 1;
                echo "<td class='calendario-day' data-day='$day'>$day</td>";
            } else {
                // Espacio vacío antes del primer día y después del último día
                echo "<td></td>";
            }
            $day_counter++;
        }
        echo "</tr>";
    }

    echo "</table>";
}

// Obtener el mes y el año actual (si se proporcionan)
$month = isset($_GET['month']) ? $_GET['month'] : date('n');
$year = isset($_GET['year']) ? $_GET['year'] : date('Y');

// Dibujar el calendario
draw_calendar($month, $year);
?>