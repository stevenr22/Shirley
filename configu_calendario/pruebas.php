<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calendario con PHP</title>
    
</head>
<body>
    <div class="controls">
        <form id="dateForm">
            <label for="month">Mes:</label>
            <select name="month" id="month">
                <?php
                for ($i = 1; $i <= 12; $i++) {
                    $selected = ($i == $month) ? 'selected' : '';
                    echo "<option value='$i' $selected>" . date('F', mktime(0,0,0,$i,1)) . "</option>";
                }
                ?>
            </select>
            <label for="year">Año:</label>
            <select name="year" id="year">
                <?php
                $currentYear = date('Y');
                for ($i = $currentYear - 10; $i <= $currentYear + 10; $i++) {
                    $selected = ($i == $year) ? 'selected' : '';
                    echo "<option value='$i' $selected>$i</option>";
                }
                ?>
            </select>
            <input type="submit" value="Actualizar">
        </form>
    </div>
    <div class="calendario">
        <?php 
            if(isset($_GET['month']) && isset($_GET['year'])){
                $month = $_GET['month'];
                $year = $_GET['year'];
            }
            include 'calendar.php'; 
        ?>
    </div>
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Información del Día</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Cerrar">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div id="modal-content"></div>
                </div>
            </div>
        </div>
    </div>
  

</body>
</html>
