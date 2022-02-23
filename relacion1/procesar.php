<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=4.0">
    <title>Ficha del Alumno</title>
</head>
<body>
    <?php
        
        //Aunque innecesario creo variables por comodidad
        $nombre = $_POST['nombre'];
        $apell = $_POST['apellidos'];
        $edad = $_POST['edad'];
        $curso = $_POST['curso'];
        $tipo = $_POST['type'];
        $naci = $_POST['naci'];
        
        echo "
            <p>
            Hola mi nombre es $nombre $apell.
            <br>
            Naci en $naci, actualmente estoy estudiando el grado de informatica en el curso $curso<br>
            concretamente en la especialidad de $tipo.
            </p>
        ";

    ?>
</body>
</html>