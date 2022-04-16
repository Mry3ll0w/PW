<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=4.0">
    <title>Ejercicio 5</title>
</head>
<body>
   
    
<h1> Formulario para rellenar la ficha de LA ETSI </h1>
    <form action="procesar.php" method="post">
    
    <p> 
        Nombre: <input type="text" name="nombre">
        <br><br>
        Apellidos: <input type="text" name="apellidos">
        <br><br>
        Curso mas alto del que te has matriculado <input type="number" name="curso" max="4">
        <br><br>
        Edad: <input type="number" name="edad" min="18">
        <br><br>
        Seleccione Especialidad:<br><br> 
        <input type="radio" name="type" value="TIC">TIC
        <br>
        <input type="radio" name="type" value="TSI">TSI
        <br>
        <input type="radio" name="type" value="COMP">COMP
        <br>
        <input type="radio" name="type" value="IS">IS
        <br>
        <br><br>
        Lugar de nacimiento: <input type="text" name="naci">
        <br><br>
    
    </p>

    <p><input type="submit" ></p>
</form>
</body>
</html>