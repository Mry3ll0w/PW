<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=3.0">
    <title>Ejercicio 5</title>
</head>
<body>
    <table name = "numeros">
        
    <?php 
        
        define("TAM",10);
        $color = "#D6D6D6";
        $cont = 0;
        for($i = 1 ; $i <= 100 ; $i++){

            if($cont == TAM){
                $cont = 0;
                
                if ($color == "#D6D6D6"){//Si es gris me la cambias a nojeque color
                    $color = "#FAF3EA";
                }
                elseif($color == "#FAF3EA"){
                    $color = "#D6D6D6";
                }

                echo '<tr></tr>';
            }
            echo "<td bgcolor=$color >$i</td>";//TD genera
            
            $cont++;
        } 

    ?>
    
    </table>
</body>
</html>
