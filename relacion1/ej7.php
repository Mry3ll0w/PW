<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 7</title>
</head>
<body>
    <?php 
        //Almacene en un vector los 10 primeros número pares. 
        //Imprímalos cada uno en una línea (recuerde que el salto de línea en 
        //HTML es <BR>)
        $v = [];//Declaramos un array vacio
        $cont = 0;
        for($i = 1; $cont < 10; $i++){
            
            if($i % 2 == 0){
                array_push($v,$i);
                $cont++;
            }
            
        }
        
        echo "<pre>";print_r($v);echo "</pre>";

    ?>
</body>
</html>