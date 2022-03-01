<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=3.0">
    <title>Ejercicio 2</title>
</head>
<style>
    th{
        color : #ffff;
        background-color : #007fff;
    }
</style>
<body>
    
    <table >
        <tr>
            <th>Respuesta</th>
            <th>Votos</th>
            <th>Porcentaje</th>
            <th>Representación gráfica</th>
        </tr>
        <td>Si</td>
        
        <?php
            //Conectamos a la base de datos
            $server = mysqli_connect("127.0.0.1","cursophp","","lindavista");
            $consulta = mysqli_query($server, "SELECT * from votos");
            $numfilas = mysqli_num_rows($consulta);
            $f = mysqli_fetch_array($consulta);
            
            //Fila del si
            $v1 = $f['votos1'];
            $v2 = $f['votos2'];
            $total = $v2 + $v1;

            echo "<td>".$v1."</td>";
            echo "<td>".round($v1/$total,3)."%</td>";

            //fila reprenstacion grafica
            echo "<tr></tr>";
            
            //Fila del no
            echo "<td>No</td>";
            echo "<td>".$v2."</td>";
            echo "<td>".round($v2/$total,3)."%</td>";

            //Fila reprensatacion grafica

        ?>
    
    </table>

</body>
</html>