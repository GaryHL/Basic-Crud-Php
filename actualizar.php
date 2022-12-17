<?php

    include("conexion.php");
    $con=conectar();

    $id =$_GET['id'];

    $sql = "SELECT * FROM alumno WHERE cod_estudiante='$id'";
    $query = mysqli_query($con,$sql);

    $row= mysqli_fetch_array($query);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

</head>
<body>
    <div class="container mt-5">
        <form action="update.php" method="POST">
            <input type="hidden" name="cod_estudiante" value="<?php echo$row['cod_estudiante']?>">

            <input type="text" class="form-control mb-3" name="dni" placeholder="Dni" value="<?php echo $row['dni']?>">
            <input type="text" class="form-control mb-3" name="nombres" placeholder="Nombres" value="<?php echo $row['nombres']?>">
            <input type="text" class="form-control mb-3" name="apellidos" placeholder="apellidos" value="<?php echo $row['apellidos']?>">

            <input type="submit" class="btn btn-primary btn-block" value="actualizar">
        </form>
    </div>
    
</body>

</html>