<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap.css">

    <title>Document</title>
</head>

<body>
    <?php include("partes/nav.php");?>
    <div class="container-fluid">
        <div class="card-header">
            <h2><b>CALENDARIO</b></h2>
        </div>
        <div class="container">
           <div class="card bg-dark">
            adf
           </div>
        </div>
    </div>
<br><br>


    <div class="container">
        <div class="card-header">
            <h2><b>TABLA DE DATOS</b></h2>
        </div>
        <div class="card-body">
            <table id="example" class="table table-striped" style="width:100%">
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

    <script src="bootstrap.js"></script>
    <script src="calendario.js"></script>
</body>

</html>