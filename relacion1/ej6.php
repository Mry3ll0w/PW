<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 6</title>
</head>
<body>
    <table name ="numeros" >
        <?php 
            
            //Mostrar una tabla de 4 por 4 que muestre las primeras 4 potencias de 
            //los números del 1 al 4 (hacer una función que las calcule invocando 
            //la función pow). En PHP las funciones hay que definirlas antes de 
            //invocarlas. Los parámetros se indican con su nombre ($cantidad) si 
            //son por valor y antecedidos de & (&$cantidad) si son por referencia.
        
            function potencia($numero, $potencia){
               return pow($numero,$potencia);
            }
            
            for($i=1; $i <= 4;$i++){
                for($j=1; $j <= 4;$j++){
                    echo "<td width = 25 >".potencia($i,$j)."</td>";
                }
                echo "<tr></tr>";
            }

        ?>
    </table>
</body>
</html>