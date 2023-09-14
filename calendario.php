<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap.css">

    <title>Document</title>
</head>

<body>
    <?php include("../partes/nav.php");?>
    <div class="container-fluid">
        <div class="card-header">
            <h2><b>CALENDARIO</b></h2>
        </div>
        <div class="card-body">
            <form>
                <div class="form-group">
                    <label>Ingrese la fecha x: </label>
                    <input type="date" class="form-control">
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