<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap.css">

    <title>INFO</title>
</head>

<body>
    <?php include("../partes/nav.php");?>
    <div class="container-fluid">
        <div class="card-header">
            <h2><b>Registre datos: </b></h2>
        </div>
        <div class="card-body">
            <form>
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="">Nombre: </label>
                                <input type="text" class="form-control" placeholder="Ingrese su nombre" name="" id="">
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="">Apellido: </label>
                                <input type="text" class="form-control" placeholder="Ingrese su apellido" name="" id="">
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="">Numero: </label>
                                <input type="number" class="form-control" placeholder="Ingrese su numero" name="" id="">
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="">Correo: </label>
                                <input type="email" class="form-control" placeholder="Ingrese su email" name="" id="">
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="">Cedula: </label>
                                <input type="text" class="form-control" placeholder="Ingrese su cedula" name="" id="">
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="">Edad: </label>
                                <input type="text" class="form-control" placeholder="Ingrese su edad" name="" id="">
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <div class="card-footer">
            <input type="button" class="btn btn-primary" value="Registrar">

        </div>
    </div>

    <script src="bootstrap.js"></script>
</body>

</html>