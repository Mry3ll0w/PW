<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 4</title>
</head>
<body>
    <table name = "numeros">
        
    <?php 
        $cont = 0;
        for($i = 1 ; $i <= 100 ; $i++){

            if($cont == 10){
                $cont = 0;
                echo '<tr></tr>';
            }
            echo '<td>'.$i.'</td>';//TD genera
            
            $cont++;
        } 

    ?>
    
    </table>
</body>
</html>