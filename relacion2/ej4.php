<!DOCTYPE html>
<html lang="en">
<style>
    
    th{
        border: 1px solid;
        background-color: #0066cc
    };

    
    

</style>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=2.0">
    <title>Ejercicio 4</title>
</head>
<body>
    <h1 style="color:#0066cc" > Consulta de Noticias </h1>
    <p>
        <form  action="eliminar.php" method="post">
            <table border= "2px">
                    <th>Titulo</th>
                    <th>Texto</th>
                    <th>Categoría</th>
                    <th>Fecha</th>
                    <th>Imagen</th>
                    <th>Borrar</th>
                    <tr></tr>
        <?php
            //Conectamos a la base de datos
            $server = mysqli_connect("127.0.0.1","cursophp","","lindavista");
            $consulta = mysqli_query($server, "SELECT * from noticias");
            $numfilas = mysqli_num_rows($consulta);
            
            for($i = 0; $i < $numfilas; $i++){
                
                echo "<tr>";
                $fila = mysqli_fetch_array($consulta);
                $id = $fila['id'];

                //Imprimo cada una de las columnas y su contenido
                
                echo "<td bgcolor='#aec5c5'>".$fila["titulo"]."</td>";
                
                echo "<td bgcolor='#aec5c5'>".$fila["texto"]."</td>";
                
               
                echo "<td bgcolor='#aec5c5'>".$fila["categoria"]."</td>";

                
                echo "<td bgcolor='#aec5c5'>".$fila["fecha"]."</td>";
                
                echo "<td bgcolor='#aec5c5'>".$fila["imagen"]."</td>";
                
                echo "<td bgcolor='#aec5c5' ><input type='checkbox' name=$i value=$id /></td>";

                echo "</tr>";
            }

        ?>
        </table>
        <br><br>
            <input type='submit' value='Eliminar Noticias seleccionadas'/>
        </form>
    </p>
</body>
</html>