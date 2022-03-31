<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>
<body>
    <h1>Bienvenido al formulario del examen</h1>
    <form action="procesa_form.php" method="post">

        Email: <input type="email" name="mail" > <br><br>
        Confirm E-mail: <input type="email" name="conf_mail"><br><br>
        Sex: <input type="radio" name="sex" value="male">Male <input type="radio" name="sex" value="Female">Female <br><br>
        Yearth of Birth: <input type="text" name="birth"> <br><br>
        <br>
        ZIP/Postal Code: <input type="text" name="ZIP"> <br> <br>
        
         
            
        <?php //Para hacer el desplegable de la lista de paises
            $conn = new mysqli("localhost","root","1001","examen");
            
            echo "Country:<select name='pais'>";
                echo "<option  selected='yes' value='NULO'>(select country)</option>";

            foreach ($conn->query("SELECT nombre from paises") as $i){
                
                echo "<option value=".$i['nombre'].">".$i['nombre']."</option>";
            
            }

            echo "</select> <br>";
            

        echo "</select>";

        ?>
        
        
        
        <br>
        Select a password: <input type="password" name="pass">
        <br><br>
        Select a password: <input type="password" name="conf_pass">
        <br><br>
        <input type="submit" value="Register">
    </form>

</body>
</html>