<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap.css">

    <title>INFO</title>
</head>

<body>
    <?php include("partes/nav.php");?>
    <div class="container-fluid">
        <div class="card-header">
            <h2><b>Registre datos: </b></h2>
        </div>
        <div class="card-body">
            <form method="post" action="registro/validar_regis.php">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="">Nombre: </label>
                                <input type="text" class="form-control" placeholder="Ingrese su nombre" name="inom" id="inom">
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="">Apellido: </label>
                                <input type="text" class="form-control" placeholder="Ingrese su apellido" name="inape" id="inape">
                            </div>
                        </div>
                    </div>
                    <br>
                    
             
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="">Cedula: </label>
                                <input type="text" class="form-control" placeholder="Ingrese su cedula" name="inced" id="inced">
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="">Edad: </label>
                                <input type="text" class="form-control" placeholder="Ingrese su edad" name="ined" id="ined">
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="">Fecha de registro: </label>
                                <input type="date" class="form-control" placeholder="Ingrese la fecha" name="infech" id="infech">
                            </div>
                        </div>
                        
                    </div>
                </div><br>
                <div class="card-footer">
                    <input type="submit" class="btn btn-primary" value="Registrar">

                </div>
            </form>
        </div>
        
    </div>

    <script src="bootstrap.js"></script>
    <script src="bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="configu_calendario/script.js"></script>
</body>

</html>