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
        <tr><td>Si</td></tr>
        <tr><td>No</td></tr>
        <?php
            //Conectamos a la base de datos
            $server = mysqli_connect("127.0.0.1","cursophp","","lindavista");
            $consulta = mysqli_query($server, "SELECT * from votos");
            $numfilas = mysqli_num_rows($consulta);
            
            for($i = 0 ; $i < $numfilas;++$i){

                $f = mysqli_fetch_array($consulta);
                echo "<td>".$f['votos1']."</td>";
                echo "<tr></tr>";
                echo "<td>".$f['votos2']."</td>";
                echo "<tr></tr>";

            }


        ?>
    </table>

</body>
</html>