<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.css" />


    <title>Document</title>
</head>
<body>
<div class="container">
        <div class="card-header">
            <h2><b>TABLA DE DATOS</b></h2>
        </div>
        <div class="card-body">
            <table table id="myTable" class="display">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>NOMBRES</th>
                        <th>APELLIDOS</th>
                        <th>FECHA REGISTRO</th>
                        <th>EDAD</th>
                        <th>CED</th>
                        <th>OPERACIONES</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                include("conexion.php");

                $senten = "SELECT u.id_usu, u.nombre_usu, u.apellido_usu, u.fecha_regis_usu, edad, ced 
                FROM usuario as u";
                $respuesta = $conexion->query($senten);
                while ($arreglo = $respuesta->fetch_array()) {
                ?>

                    <tr class="odd gradeX">
                        <td><?php echo $arreglo['id_usu'] ?></td>
                        <td><?php echo $arreglo['nombre_usu'] ?></td>
                        <td><?php echo $arreglo['apellido_usu'] ?></td>
                        <td><?php echo $arreglo['fecha_regis_usu'] ?></td>
                        <td><?php echo $arreglo['edad'] ?></td>
                        <td><?php echo $arreglo['ced'] ?></td>



                        <td class="center">
                            <!-- <button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal"><i class="material-icons">edit</i>Actualizar</button> -->
                            <button type="button" class="btn btn-success" >EDITAR</i></button>
                            <button type="button" class="btn btn-danger"> <i class="material-icons">ELIMINAR</i></button>
                        </td>
                    </tr>

                <?php } ?>
                   
                    
                </tbody>
            
            </table>
        </div>
    </div>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.js"></script>
    <script>
        $(document).ready( function () {
            $('#myTable').DataTable();
        } );
    </script>
</body>
</html>