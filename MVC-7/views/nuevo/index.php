<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=<, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php require 'views/header.php';?>

    <div id="main">
        <h1 class="center">Sección de Nuevo</h1>
                <-!// nos  debe llebar aun metodo ,este metodo lo seleccionara nuestro controlador base,
                //quien mediante los constructores de los objetos instaciados proporcionalidad las funcionalidades base 
                
        <form action="<?php echo constant('URL'); ?>nuevo/registrarAlumno" method="POST">

            <p>
                <label for="matricula">Matrícula</label><br>
                <input type="text" name="matricula" id="" required>
            </p>
            <p>
                <label for="nombre">Nombre</label><br>
                <input type="text" name="nombre" id="" required>
            </p>
            <p>
                <label for="apellido">Apellido</label><br>
                <input type="text" name="apellido" id="" required>
            </p>

            <p>
            <input type="submit" value="Registrar nuevo alumno">
            </p>

        </form>
    </div>

    <?php require 'views/footer.php';?>
</body>
</html>