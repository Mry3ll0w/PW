<!DOCTYPE html>
<html lang = "es">
<body>
    <h1>Problema 9</h1>

<table border="6" bordercolor="pink">
<?php

    $cont = 0;

    chdir('fotos/');

    $imagenes = scandir(getcwd());


    for($i = 2; $i < sizeof($imagenes); $i++)//Empezamos por el segudo ya que estan los enlaces .. y . del directorio
    {
        if($cont ==  4){//Cada 4 saltamos
            $cont = 0;
            echo '<tr></tr>';
        }

       
        echo "<td><img src= 'fotos/$imagenes[$i]' width='200' height='200'></td>";
        $cont++;
    }

?>
</table>
</body>
</html>